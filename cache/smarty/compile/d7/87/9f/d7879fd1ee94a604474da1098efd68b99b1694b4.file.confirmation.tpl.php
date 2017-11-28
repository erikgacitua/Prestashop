<?php /* Smarty version Smarty-3.1.19, created on 2017-09-29 06:40:35
         compiled from "/var/www/html/prestashop/modules/flowpayment/views/templates/front/confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47457822459ce15130acfd4-41717768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7879fd1ee94a604474da1098efd68b99b1694b4' => 
    array (
      0 => '/var/www/html/prestashop/modules/flowpayment/views/templates/front/confirmation.tpl',
      1 => 1506675816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47457822459ce15130acfd4-41717768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'flow_action' => 0,
    'flow_request' => 0,
    'flow_additional' => 0,
    'flow_percent' => 0,
    'flow_amount_order' => 0,
    'flow_amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ce15131475c9_47276789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ce15131475c9_47276789')) {function content_59ce15131475c9_47276789($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Pago a través de Flow','mod'=>'flowpayment'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<h2><?php echo smartyTranslate(array('s'=>'Order summary','mod'=>'cheque'),$_smarty_tpl);?>
</h2>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['flow_action']->value;?>
">
<input type="hidden" name="parameters" value="<?php echo $_smarty_tpl->tpl_vars['flow_request']->value;?>
" />
	<div class="row row-margin-bottom">
		<div class="col-sm-6">
			<?php if ($_smarty_tpl->tpl_vars['flow_additional']->value>0) {?>
			<div class="warn">
			Se realizará un cobro adicional de $<?php echo $_smarty_tpl->tpl_vars['flow_additional']->value;?>
 correspondiente a un <?php echo $_smarty_tpl->tpl_vars['flow_percent']->value;?>
% de $<?php echo $_smarty_tpl->tpl_vars['flow_amount_order']->value;?>
.
			</div>
        	<?php }?>
			El pago total se realizará a través de FLOW por $<?php echo $_smarty_tpl->tpl_vars['flow_amount']->value;?>
.
		</div>
		<div class="col-sm-6">
			<button type="submit" class="button btn btn-default standard-checkout button-medium pull-right">
				<span>Pagar <i class="icon-chevron-right right"></i></span>
			</button>
		</div>
	</div>
</form>

<?php }} ?>
