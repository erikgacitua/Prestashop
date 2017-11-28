<?php
include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../init.php');
include_once (_PS_MODULE_DIR_ . 'flowpaymentsp/lib-flow/flowlib.php');
include_once ('flowpaymentsp.php');


class Flow_Servipag_Postback {
    public function init() {
    	$this->confirm();
    }

    public function confirm() {
    	$privatekey = Configuration::get('FLOW_SP_PRIVATEKEY');
    	$comercio = Configuration::get('FLOW_SP_IDCOMERCIO');
    
    	$errorResponse = array('status' => 'RECHAZADO', 'c' => $comercio);
    	$acceptResponse = array('status' => 'ACEPTADO', 'c' => $comercio);
    
    	$data = $_POST['response'];
    	$data = str_replace('&amp;', '&', $data);
    	try {
    		$params = flow_servipag_sign_validate($data);
    	} catch (Exception $e) {
    		error_log($e->getMessage());
    		echo flow_servipag_build_response($privatekey, $errorResponse);
    		return;
    	}
    
    	$error = flow_servipag_aget($params, 'error');
    	if ($error != null) {
    		error_log("Error recibido: $error");
    		echo flow_servipag_build_response($privatekey, $acceptResponse);
    		return;
    	}
    
    	$status = flow_servipag_aget($params, 'status');
    	if ($status == null) {
    		error_log("Peticion inválida (sin status)");
    		echo flow_servipag_build_response($privatekey, $errorResponse);
    		return;
    	}
    
    	$cartId = flow_servipag_aget($params, 'kpf_orden');
    	$amount   = flow_servipag_aget($params, 'kpf_monto');
    	
    	// compatibilidad con versiones antiguas
    	if ($cartId == null) $cartId = flow_servipag_aget($params, 'oc');
    	if ($amount == null) $amount = (int)flow_servipag_aget($params, 'm');
    	
    	error_log(print_r($params, true));
    	
    	$cart = new Cart($cartId);
		error_log('cartId: '.print_r($cartId, true));    	 
    	if ($cart) {
    		error_log("cart found");
    		$recargo = (float)Configuration::get('FLOW_SP_ADDITIONAL');
    		
    		$order_total = (int)($cart->getOrderTotal(true, Cart::BOTH));
    		$order_total_additonal = $order_total + round(($order_total * $recargo)/100.0);
    		
    		$order_amount_valid = $amount == (int)$order_total_additonal;
    		
    		if ($order_amount_valid) {
    			
    			$order_status_completed_id = (int)Configuration::get('PS_OS_PAYMENT');
    			$order_status_failed_id    = (int)Configuration::get('PS_OS_ERROR');
    			$order_status = $status == 'EXITO'?$order_status_completed_id:$order_status_failed_id;
    			
    			$flowPayment = new FlowPaymentSP();
    			$flowPayment->validateOrder($cart->id, $order_status, $order_total, "FLOW", null, array(), null, false, $cart->secure_key);
    			echo flow_servipag_build_response($privatekey, $acceptResponse);
    			return;
    		}
    	}
    	echo flow_servipag_build_response($privatekey, $errorResponse);
    }
    

}

$notify = new Flow_Servipag_Postback();
$notify->init();

