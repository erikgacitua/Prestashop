<?php

if (!defined('_PS_VERSION_'))
    exit;

include_once (_PS_MODULE_DIR_ . 'flowpaymentsp/lib-flow/flowlib.php');

class FlowPaymentSP extends PaymentModule {

    protected $_errors = array();

    public function __construct() {
        $this->name = 'flowpaymentsp';

        // Calling the parent's constructor. This must be done before any use of the $this->l() method, and after the creation of $this->name.
        parent::__construct();

        $this->displayName = $this->l('Flow Servipag');
        $this->description = $this->l('Pago via Servipag');

        $this->author = 'Flow';
        $this->version = '1.0.8';
        $this->tab = 'payments_gateways';


        // Module settings
        $this->setModuleSettings();

        // Check module requirements
        $this->checkModuleRequirements();
    }

    public function install() {
        if (!parent::install() OR !$this->registerHook('payment') OR !$this->registerHook('paymentReturn'))
            return false;
        return true;
    }

    public function uninstall() {
        if (!parent::uninstall())
            return false;

        // Drop the paymentmethod table
        Db::getInstance()->execute("DROP TABLE if exists {$this->dbPmInfo}");

        // Drop the paymentmethod raw data table
        Db::getInstance()->execute("DROP TABLE if exists {$this->dbRawData}");

        return true;
    }

    public function hookPaymentReturn($params) {
        if (!$this->active)
            return;
        global $smarty;
        $smarty->assign(array(
            'status' => Tools::getValue('status', 'OPEN')
        ));
        return $this->display(__FILE__, 'confirmation.tpl');
    }

    public function hookPayment($params) {
        if (!$this->active)
            return;

        global $smarty;

        // Get active Shop ID for multistore shops
        $activeShopID = (int) Context::getContext()->shop->id;
        
        $title = Configuration::get('FLOW_SP_TITLE');
        
        $smarty->assign(array(
        	'logo' => Tools::getShopDomainSsl(true, true) . __PS_BASE_URI__ . "modules/{$this->name}/logo-small.png",
        	'title' => $title
        ));

        return $this->display(__FILE__, 'views/templates/hook/payment.tpl');
    }


    public function getContent() { 
        // Get active Shop ID for multistore shops
        $activeShopID = (int) Context::getContext()->shop->id;

        if (isset($_POST['flow_updateSettings'])) {
        	Configuration::updateValue('FLOW_SP_TITLE', Tools::getValue('title'));
            Configuration::updateValue('FLOW_SP_IDCOMERCIO', Tools::getValue('idComercio'));
            Configuration::updateValue('FLOW_SP_PLATFORM'  , Tools::getValue('platformType'));
            Configuration::updateValue('FLOW_SP_SKIPTYPE'  , Tools::getValue('skipType'));
            Configuration::updateValue('FLOW_SP_ADDITIONAL'  , Tools::getValue('additional'));
            
            $hasFile = false;
            if (isset($_FILES['privateKey'])) {
            	$file = $_FILES['privateKey'];
            	$hasFile = $file['size']>0;
            	if ($hasFile) {
            		$fileName = $file['tmp_name'];
            		if (!$this->isValidPrivateKey($fileName)) {
            			$this->hasPrivateKey ='invalid';
            		} else {
            			Configuration::updateValue('FLOW_SP_PRIVATEKEY', file_get_contents($fileName));
            			$this->hasPrivateKey ='valid';
            		}
            	}
            }
            
            $privateKey = Configuration::get('FLOW_SP_PRIVATEKEY');
            
            if ($privateKey == null && !$hasFile) {
            	$this->hasPrivateKey = 'no';
            }
            Configuration::updateValue('FLOW_SP_HASPRIVATEKEY', $this->hasPrivateKey);
            		
            $this->setModuleSettings();
            $this->checkModuleRequirements();

        } else {
        	$this->setModuleSettings();
        }
        
        $this->context->smarty->assign(array(
            'errors' => $this->_errors,
            'post_url' => Tools::htmlentitiesUTF8($_SERVER['REQUEST_URI']),
        	'data_platformType' => $this->platformType,
        	'data_idComercio' => $this->idComercio,
            'data_privateKeyInfo' => $this->hasPrivateKey=='valid'?'Tiene una clave privada válida registrada. Seleccione otra si la desea actualizar':'',
            'data_skipType' => $this->skipType,
        	'data_additional' => $this->additional,
        	'data_title' => $this->title,
        		
            'version' => $this->version,
            'img_header' => Tools::getShopDomainSsl(true, true) . __PS_BASE_URI__ . "modules/{$this->name}/logo.png"
        ));

        return $this->display($this->name, 'views/templates/admin/config.tpl');
    }

    private function checkModuleRequirements() {
        $this->_errors = array();
        
        if ($this->idComercio == '') {
        	$this->_errors['idComercio'] = 'Debe indicar su ID de Flow para recibir los pagos';
        }
        if ($this->title == '') {
        	$this->_errors['title'] = 'Debe indicar el nombre que se usará para este medio de pago';
        }
        if ($this->additional == '') {
        	$this->_errors['additional'] = 'Si no tiene cobro adicional, indique 0';
        } else {
        	$additional = (float)$this->additional;
        	if ($additional<0 || $additional>100) {
        		$this->_errors['additional'] = 'Porcentaje debe estar entre 0 y 100';
        	}
        }
        
        if ($this->hasPrivateKey == 'invalid') {
        	$this->_errors['privateKey'] = 'El archivo no corresponde a una llave privada Flow';
        }
        if ($this->hasPrivateKey == 'no') {
        	$this->_errors['privateKey'] = 'Debe adjuntar su llave privada Flow (archivo .pem)';
        }
    }

    private function setModuleSettings() {
        $this->idComercio = Configuration::get('FLOW_SP_IDCOMERCIO');
        $this->title = Configuration::get('FLOW_SP_TITLE');
        $this->hasPrivateKey = Configuration::get('FLOW_SP_HASPRIVATEKEY');
        $this->platformType = Configuration::get('FLOW_SP_PLATFORM');
        $this->skipType = Configuration::get('FLOW_SP_SKIPTYPE');
        $this->additional = (float)Configuration::get('FLOW_SP_ADDITIONAL');
    }
    
    private function isValidPrivateKey($privateKeyFile) {
    	$fp = fopen($privateKeyFile, "r");
    	$priv_key = fread($fp, 8192);
    	fclose($fp);
    	return openssl_get_privatekey($priv_key)!=null;
    }

}

