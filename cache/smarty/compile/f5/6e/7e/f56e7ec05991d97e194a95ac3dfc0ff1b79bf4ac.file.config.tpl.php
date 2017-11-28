<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 19:22:55
         compiled from "/var/www/html/prestashop/modules/flowpaymentsp/views/templates/admin/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166840305959d8023fdceb66-87052792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f56e7ec05991d97e194a95ac3dfc0ff1b79bf4ac' => 
    array (
      0 => '/var/www/html/prestashop/modules/flowpaymentsp/views/templates/admin/config.tpl',
      1 => 1507328558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166840305959d8023fdceb66-87052792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_header' => 0,
    'version' => 0,
    'post_url' => 0,
    'data_platformType' => 0,
    'errors' => 0,
    'data_title' => 0,
    'data_idComercio' => 0,
    'data_privateKeyInfo' => 0,
    'data_skipType' => 0,
    'data_additional' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d8023fe883c5_88638572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d8023fe883c5_88638572')) {function content_59d8023fe883c5_88638572($_smarty_tpl) {?><img src="<?php echo $_smarty_tpl->tpl_vars['img_header']->value;?>
"/>

<h2><?php echo smartyTranslate(array('s'=>'Pago via Servipag usando Flow','mod'=>'flowpaymentsp'),$_smarty_tpl);?>
</h2>

<fieldset>
    <legend><img src="../img/admin/warning.gif"/><?php echo smartyTranslate(array('s'=>'Information','mod'=>'flowpaymentsp'),$_smarty_tpl);?>
</legend>
    <div class="margin-form">Module version: <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</div>
    
</fieldset>

<form action="<?php echo $_smarty_tpl->tpl_vars['post_url']->value;?>
" method="post" enctype="multipart/form-data" style="clear: both; margin-top: 10px;">
    <fieldset>
		
	    <legend><img src="../img/admin/contact.gif"/><?php echo smartyTranslate(array('s'=>'Settings','mod'=>'flow'),$_smarty_tpl);?>
</legend>
	    
	    <label for="platformType"><?php echo smartyTranslate(array('s'=>'Plataforma de Flow','mod'=>'flowpaymentsp'),$_smarty_tpl);?>
</label>
	    <div class="margin-form">
		    <select name="platformType">
		    	<option value="test" <?php if ($_smarty_tpl->tpl_vars['data_platformType']->value=="test") {?>selected<?php }?>>Plataforma de pruebas de Flow</option>
				<option value="real" <?php if ($_smarty_tpl->tpl_vars['data_platformType']->value=="real") {?>selected<?php }?>>Plataforma oficial de Flow</option>
			</select>
		</div>
		
		<?php if (isset($_smarty_tpl->tpl_vars['errors']->value['title'])) {?>
            <div class="error">
                <p><?php echo $_smarty_tpl->tpl_vars['errors']->value['title'];?>
</p>
            </div>
        <?php }?>

        <label for="title"><?php echo smartyTranslate(array('s'=>'Nombre del medio de pago','mod'=>'flowpaymentsp'),$_smarty_tpl);?>
</label>

        <div class="margin-form"><input type="text" size="60" id="title" name="title" maxsize="100"
                                        value="<?php echo $_smarty_tpl->tpl_vars['data_title']->value;?>
" placeholder="Ingrese el nombre que se mostrará al usuario"/></div>
		
	    <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['idComercio'])) {?>
            <div class="error">
                <p><?php echo $_smarty_tpl->tpl_vars['errors']->value['idComercio'];?>
</p>
            </div>
        <?php }?>

        <label for="idComercio"><?php echo smartyTranslate(array('s'=>'ID Comercio Flow','mod'=>'flowpaymentsp'),$_smarty_tpl);?>
</label>

        <div class="margin-form"><input type="text" size="33" id="idComercio" name="idComercio"
                                        value="<?php echo $_smarty_tpl->tpl_vars['data_idComercio']->value;?>
"/></div>
        <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['privateKey'])) {?>
            <div class="error">
                <p><?php echo $_smarty_tpl->tpl_vars['errors']->value['privateKey'];?>
</p>
            </div>
        <?php }?>
		<label for="privateKey"><?php echo smartyTranslate(array('s'=>'Llave privada Flow','mod'=>'flowpaymentsp'),$_smarty_tpl);?>
</label>

        <div class="margin-form"><?php echo $_smarty_tpl->tpl_vars['data_privateKeyInfo']->value;?>
<input type="file" name="privateKey" /></div>
        
	    <label for="skipType"><?php echo smartyTranslate(array('s'=>'Modo de acceso a Webpay','mod'=>'flowpaymentsp'),$_smarty_tpl);?>
</label>
	    <div class="margin-form">
		    <select name="skipType">
		    	<option value="d" <?php if ($_smarty_tpl->tpl_vars['data_skipType']->value=="d") {?>selected<?php }?>>Ingresar directamente a Servipag</option>
				<option value="f" <?php if ($_smarty_tpl->tpl_vars['data_skipType']->value=="f") {?>selected<?php }?>>Mostrar pasarela Flow</option>
			</select>
		</div>
        
	    <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['additional'])) {?>
            <div class="error">
                <p><?php echo $_smarty_tpl->tpl_vars['errors']->value['additional'];?>
</p>
            </div>
        <?php }?>

        <label for="additional"><?php echo smartyTranslate(array('s'=>'Cobro adicional (en %)','mod'=>'flowpaymentsp'),$_smarty_tpl);?>
</label>

        <div class="margin-form"><input type="text" size="5" id="additional" name="additional"
                                        value="<?php echo $_smarty_tpl->tpl_vars['data_additional']->value;?>
"/></div>
                                        
        <center><input type="submit" name="flow_updateSettings" value="<?php echo smartyTranslate(array('s'=>'Save Settings','mod'=>'flowpaymentsp'),$_smarty_tpl);?>
"
                       class="button" style="cursor: pointer; display:"/></center>
    </fieldset>
</form>
<?php }} ?>
