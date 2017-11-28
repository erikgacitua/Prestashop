<?php /* Smarty version Smarty-3.1.19, created on 2017-08-30 19:27:52
         compiled from "/var/www/html/prestashop/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168033087459a711b8af2f80-67570277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b77b5d7328bd36b786e5dfdcedf013377c195951' => 
    array (
      0 => '/var/www/html/prestashop/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1504121256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168033087459a711b8af2f80-67570277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59a711b8af7106_99620346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a711b8af7106_99620346')) {function content_59a711b8af7106_99620346($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
