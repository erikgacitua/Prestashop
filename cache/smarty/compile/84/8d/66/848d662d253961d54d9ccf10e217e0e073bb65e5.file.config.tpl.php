<?php /* Smarty version Smarty-3.1.19, created on 2017-09-28 16:05:59
         compiled from "/var/www/html/prestashop/modules/khipupayment/views/templates/admin/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167969753659cd48170cfd46-90111255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '848d662d253961d54d9ccf10e217e0e073bb65e5' => 
    array (
      0 => '/var/www/html/prestashop/modules/khipupayment/views/templates/admin/config.tpl',
      1 => 1506625540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167969753659cd48170cfd46-90111255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_header' => 0,
    'version' => 0,
    'api_version' => 0,
    'khipu_notify_url' => 0,
    'khipu_postback_url' => 0,
    'post_url' => 0,
    'errors' => 0,
    'data_merchantid' => 0,
    'data_secretcode' => 0,
    'paymentMethodAvailable' => 0,
    'data_simpleTransfer' => 0,
    'data_regularTransfer' => 0,
    'data_payme' => 0,
    'data_hoursTimeout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cd4817153688_69726814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cd4817153688_69726814')) {function content_59cd4817153688_69726814($_smarty_tpl) {?>

<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_header']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>

<h2><?php echo smartyTranslate(array('s'=>'Transferencia bancaria usando khipu','mod'=>'khipupayment'),$_smarty_tpl);?>
</h2>

<fieldset>
    <legend><img src="../img/admin/warning.gif"/><?php echo smartyTranslate(array('s'=>'Information','mod'=>'khipupayment'),$_smarty_tpl);?>
</legend>
    <div class="margin-form">Module version: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
    <div class="margin-form">API version: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['api_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div>
    <label><?php echo smartyTranslate(array('s'=>'Thank you page, error page','mod'=>'khipupayment'),$_smarty_tpl);?>
</label>

    <div class="margin-form"><input type="text" size="233" name="url"
                                    value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['khipu_notify_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" readonly/></div>
    <label><?php echo smartyTranslate(array('s'=>'Postback URL','mod'=>'khipupayment'),$_smarty_tpl);?>
</label>

    <div class="margin-form"><input type="text" size="233" name="url"
                                    value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['khipu_postback_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" readonly/></div>
</fieldset>

<form action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['post_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" style="clear: both; margin-top: 10px;">
    <fieldset>
        <legend><img src="../img/admin/contact.gif"/><?php echo smartyTranslate(array('s'=>'Settings','mod'=>'khipupayment'),$_smarty_tpl);?>
</legend>
        <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['merchantERR'])) {?>
            <div class="error">
                <p><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['errors']->value['merchantERR'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
            </div>
        <?php }?>
        <label for="merchantID"><?php echo smartyTranslate(array('s'=>'ID Cobrador','mod'=>'khipupayment'),$_smarty_tpl);?>
</label>

        <div class="margin-form"><input type="text" size="33" id="merchantID" name="merchantID"
                                        value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data_merchantid']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/></div>
        <label for="secretCode"><?php echo smartyTranslate(array('s'=>'Llave secreta','mod'=>'khipupayment'),$_smarty_tpl);?>
</label>

        <div class="margin-form"><input type="text" size="33" name="secretCode"
                                        id="secretCode" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data_secretcode']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/></div>

        <label for="secretCode"><?php echo smartyTranslate(array('s'=>'Tipos de pago habilitados','mod'=>'khipupayment'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
	    <?php if ($_smarty_tpl->tpl_vars['paymentMethodAvailable']->value["simpleTransfer"]) {?>
		<input type="checkbox" name="simpleTransfer" <?php if ($_smarty_tpl->tpl_vars['data_simpleTransfer']->value) {?>checked<?php }?> value="1"> Transferencia simplificada (con
                    terminal de pagos khipu)<br>
	    <?php }?>
	    <?php if ($_smarty_tpl->tpl_vars['paymentMethodAvailable']->value["regularTransfer"]) {?>
		<input type="checkbox" name="regularTransfer" <?php if ($_smarty_tpl->tpl_vars['data_regularTransfer']->value) {?>checked<?php }?> value="1"> Transferencia normal<br>
	    <?php }?>
	    <?php if ($_smarty_tpl->tpl_vars['paymentMethodAvailable']->value["payme"]) {?>
		<input type="checkbox" name="payme" <?php if ($_smarty_tpl->tpl_vars['data_payme']->value) {?>checked<?php }?> value="1"> Pago con Tarjeta bancaria<br>
	    <?php }?>
        </div>

        <label for="merchantID"><?php echo smartyTranslate(array('s'=>'Horas para realizar el pago (pasado este tiempo la orden se cancela y se recupera el stock)','mod'=>'khipupayment'),$_smarty_tpl);?>
</label>

        <div class="margin-form"><input type="number" size="33" id="hoursTimeout" name="hoursTimeout"
                                        value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data_hoursTimeout']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/></div>

        <center><input type="submit" name="khipu_updateSettings" value="<?php echo smartyTranslate(array('s'=>'Save Settings','mod'=>'khipupayment'),$_smarty_tpl);?>
"
                       class="button" style="cursor: pointer; display:"/></center>
    </fieldset>
</form>
<?php }} ?>
