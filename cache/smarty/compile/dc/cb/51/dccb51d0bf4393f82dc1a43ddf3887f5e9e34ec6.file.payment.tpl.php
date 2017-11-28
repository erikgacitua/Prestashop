<?php /* Smarty version Smarty-3.1.19, created on 2017-09-29 06:40:27
         compiled from "/var/www/html/prestashop/modules/flowpayment/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17809712159ce150b351681-47425109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dccb51d0bf4393f82dc1a43ddf3887f5e9e34ec6' => 
    array (
      0 => '/var/www/html/prestashop/modules/flowpayment/views/templates/hook/payment.tpl',
      1 => 1506675816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17809712159ce150b351681-47425109',
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
  'unifunc' => 'content_59ce150b3e53a1_38341231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ce150b3e53a1_38341231')) {function content_59ce150b3e53a1_38341231($_smarty_tpl) {?><div class="row">
	<div class="col-xs-12 col-md-6">
        <p class="payment_module">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('flowpayment','payment'), ENT_QUOTES, 'UTF-8', true);?>
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
