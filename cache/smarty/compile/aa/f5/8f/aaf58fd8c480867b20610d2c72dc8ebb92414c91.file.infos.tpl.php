<?php /* Smarty version Smarty-3.1.19, created on 2017-09-29 02:06:03
         compiled from "/var/www/html/prestashop/modules/bankwire/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62871210159cdd4bbbcfb26-46064508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaf58fd8c480867b20610d2c72dc8ebb92414c91' => 
    array (
      0 => '/var/www/html/prestashop/modules/bankwire/views/templates/hook/infos.tpl',
      1 => 1506635173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62871210159cdd4bbbcfb26-46064508',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cdd4bbbff682_66808258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cdd4bbbff682_66808258')) {function content_59cdd4bbbff682_66808258($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/bankwire/bankwire.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order's status will change to 'Waiting for Payment.'",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
