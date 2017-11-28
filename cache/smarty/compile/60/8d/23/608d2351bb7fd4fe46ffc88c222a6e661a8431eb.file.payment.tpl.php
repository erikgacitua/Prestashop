<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 19:25:03
         compiled from "/var/www/html/prestashop/modules/flowpaymentsp/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102773227059d802bf596ac0-92690727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '608d2351bb7fd4fe46ffc88c222a6e661a8431eb' => 
    array (
      0 => '/var/www/html/prestashop/modules/flowpaymentsp/views/templates/hook/payment.tpl',
      1 => 1507328558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102773227059d802bf596ac0-92690727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'logo' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d802bf63a232_69775476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d802bf63a232_69775476')) {function content_59d802bf63a232_69775476($_smarty_tpl) {?><div class="row">
	<div class="col-xs-12 col-md-6">
        <p class="payment_module">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('flowpaymentsp','payment'), ENT_QUOTES, 'UTF-8', true);?>
"
				style="background: url(<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
) no-repeat scroll 15px 12px #FBFBFB;"
				title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" class="bankwire flowpayment">
            	<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </a>
        </p>
    </div>
</div><?php }} ?>
