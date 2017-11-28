<?php

class FlowPaymentPaymentModuleFrontController extends ModuleFrontController
{
	public function __construct()
	{
		parent::__construct();
		$this->display_column_left = false;
	}
	
    public function initContent()
    {
    	$flowPayment = new FlowPayment();
    	parent::initContent();
    	 
        $cart = $this->context->cart;
        $cartId = self::$cart->id;
        $customer = $this->context->customer;
        
        $comercio = Configuration::get('FLOW_IDCOMERCIO');
        $recargo = (float)Configuration::get('FLOW_ADDITIONAL');
        
        $ordenCompra = $cartId;
        $monto_orden = (int)($cart->getOrderTotal(true, Cart::BOTH));
        $monto_adicional = round(($monto_orden * $recargo)/100.0);
        $monto = $monto_orden + $monto_adicional;
        $monto_porcentaje = $recargo;
        
        $tipo_comision = Configuration::get('FLOW_PAYMENTYPE');
        $concepto = html_entity_decode('Orden #'.$ordenCompra.' de '.Configuration::get('PS_SHOP_NAME'), ENT_QUOTES, 'UTF-8');
        
        $id_producto = $customer->email."_".$cart->id;
        $key = Configuration::get('FLOW_PRIVATEKEY');
        
        $tipo_integracion = Configuration::get('FLOW_SKIPTYPE');
        $email = $customer->email; 
        
        /* preparar pagina de exito o fracaso */
        $url_base = Tools::getShopDomainSsl(true, true) . __PS_BASE_URI__ . "index.php?fc=module&module={$flowPayment->name}&controller=validate&cartId=" . $cartId;
        $url_exito   = $url_base."&return=ok";
        $url_fracaso = $url_base."&return=error";
        $url_confirmacion = Tools::getShopDomainSsl(true, true) . __PS_BASE_URI__ . "modules/{$flowPayment->name}/validate.php";
		
		/*Compatibilidad*/
		$url_historia = $this->context->link->getPageLink('history');
		$url_exito = $url_historia;
		$url_fracaso = $url_historia;
        	
        $flow_platform_id = Configuration::get('FLOW_PLATFORM');
        $isTestPlatform = !$flow_platform_id || $flow_platform_id == 'test';
        $flow_endpoint = $isTestPlatform?flow_get_endpoint_test():flow_get_endpoint();
        	
        $data_action = $flow_endpoint;
		$medioPago = 1;
        $data_request = flow_pack($key, $comercio,
        		$ordenCompra, $monto, $medioPago, $concepto, $id_producto,
        		$url_exito, $url_fracaso, $url_confirmacion,
				$tipo_integracion, $email);
        
        $params = array(
        		'flow_action' => $data_action,
        		'flow_request' => $data_request,
        		'flow_amount' => $monto,
        		'flow_amount_order' => $monto_orden,
        		'flow_additional' => $monto_adicional,
        		'flow_percent' => $monto_porcentaje
        
        );
        
        $this->context->smarty->assign($params);
        
        $this->setTemplate('confirmation.tpl');
    }

}
