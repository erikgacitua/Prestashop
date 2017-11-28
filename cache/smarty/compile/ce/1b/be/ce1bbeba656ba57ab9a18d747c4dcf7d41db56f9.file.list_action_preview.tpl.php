<?php /* Smarty version Smarty-3.1.19, created on 2017-08-31 16:43:10
         compiled from "/var/www/html/prestashop/admin2941um20c/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200444558459a866ced6ccc4-80668446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce1bbeba656ba57ab9a18d747c4dcf7d41db56f9' => 
    array (
      0 => '/var/www/html/prestashop/admin2941um20c/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1504121256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200444558459a866ced6ccc4-80668446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59a866ced7fb46_37285034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a866ced7fb46_37285034')) {function content_59a866ced7fb46_37285034($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
