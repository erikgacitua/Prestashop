<?php /* Smarty version Smarty-3.1.19, created on 2017-09-29 06:44:26
         compiled from "/var/www/html/prestashop/modules/khipupayment/views/templates/front/khipu_error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176000438359ce15fab144a6-19314033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89bbcf9581d0e4679a2a233d96c1814543fff651' => 
    array (
      0 => '/var/www/html/prestashop/modules/khipupayment/views/templates/front/khipu_error.tpl',
      1 => 1506625540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176000438359ce15fab144a6-19314033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'errorItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ce15fab938f3_56988681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ce15fab938f3_56988681')) {function content_59ce15fab938f3_56988681($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h2><?php echo smartyTranslate(array('s'=>'Error de conexión con khipu','mod'=>'khipupayment'),$_smarty_tpl);?>
</h2>

<ul>
    <li><strong><?php echo smartyTranslate(array('s'=>'Estado','mod'=>'khipupayment'),$_smarty_tpl);?>
</strong>: <?php echo $_smarty_tpl->tpl_vars['error']->value->getStatus();?>
</li>
    <li><strong><?php echo smartyTranslate(array('s'=>'Mensaje','mod'=>'khipupayment'),$_smarty_tpl);?>
</strong>: <?php echo $_smarty_tpl->tpl_vars['error']->value->getMessage();?>
</li>

    <?php if (method_exists($_smarty_tpl->tpl_vars['error']->value,'getErrors')) {?>
        <li><?php echo smartyTranslate(array('s'=>'Errores','mod'=>'khipupayment'),$_smarty_tpl);?>

            <ul>
            <?php  $_smarty_tpl->tpl_vars['errorItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['errorItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error']->value->getErrors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['errorItem']->key => $_smarty_tpl->tpl_vars['errorItem']->value) {
$_smarty_tpl->tpl_vars['errorItem']->_loop = true;
?>
                <li><strong><?php echo $_smarty_tpl->tpl_vars['errorItem']->value->getField();?>
</strong>: <?php echo $_smarty_tpl->tpl_vars['errorItem']->value->getMessage();?>
</li>
            <?php } ?>
            </ul>
        </li>
    <?php }?>
</ul><?php }} ?>
