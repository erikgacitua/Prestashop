<?php /* Smarty version Smarty-3.1.19, created on 2017-08-31 16:41:58
         compiled from "/var/www/html/prestashop/admin2941um20c/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52109522659a86686b6acc5-06548409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc4c604299872a70a2b538759c88be8265c553d4' => 
    array (
      0 => '/var/www/html/prestashop/admin2941um20c/themes/default/template/content.tpl',
      1 => 1504121256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52109522659a86686b6acc5-06548409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59a86686b75ea3_94286059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a86686b75ea3_94286059')) {function content_59a86686b75ea3_94286059($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
