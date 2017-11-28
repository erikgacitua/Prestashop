<?php /* Smarty version Smarty-3.1.19, created on 2017-09-28 16:12:51
         compiled from "/var/www/html/prestashop/modules/khipupayment/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42203139659cd49b303ac24-07888547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5018687610fa6a6d3175b08b865d00b818260f1' => 
    array (
      0 => '/var/www/html/prestashop/modules/khipupayment/views/templates/hook/payment.tpl',
      1 => 1506625540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42203139659cd49b303ac24-07888547',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'simpleTransfer' => 0,
    'link' => 0,
    'merchantID' => 0,
    'regularTransfer' => 0,
    'payme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cd49b30e65e5_11147977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cd49b30e65e5_11147977')) {function content_59cd49b30e65e5_11147977($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['simpleTransfer']->value) {?>
    <p class="payment_module">
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('khipupayment','bankselect'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
           title="<?php echo smartyTranslate(array('s'=>'Transferencia simplificada usando khipu','mod'=>'khipupayment'),$_smarty_tpl);?>
">
            <img src="//bi.khipu.com/150x50/capsule/khipu/transparent/<?php echo $_smarty_tpl->tpl_vars['merchantID']->value;?>
"
                 alt="<?php echo smartyTranslate(array('s'=>'Transferencia simplificada','mod'=>'khipupayment'),$_smarty_tpl);?>
"/>
            <?php echo smartyTranslate(array('s'=>'Transferencia simplificada (Recomendada)','mod'=>'khipupayment'),$_smarty_tpl);?>

        </a>
    </p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['regularTransfer']->value) {?>
    <p class="payment_module">
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('khipupayment','manual'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
           title="<?php echo smartyTranslate(array('s'=>'Transferencia bancaria usando khipu','mod'=>'khipupayment'),$_smarty_tpl);?>
">
            <img src="//bi.khipu.com/150x50/capsule/transfer/transparent/<?php echo $_smarty_tpl->tpl_vars['merchantID']->value;?>
"
                 alt="<?php echo smartyTranslate(array('s'=>'Transferencia normal','mod'=>'khipupayment'),$_smarty_tpl);?>
"/>
            <?php echo smartyTranslate(array('s'=>'Transferencia normal','mod'=>'khipupayment'),$_smarty_tpl);?>

        </a>
    </p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['payme']->value) {?>
    <p class="payment_module">
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('khipupayment','payme'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
           title="<?php echo smartyTranslate(array('s'=>'Pago con tarjeta bancaria usando khipu','mod'=>'khipupayment'),$_smarty_tpl);?>
">
            <img src="//bi.khipu.com/150x50/capsule/payme/transparent/<?php echo $_smarty_tpl->tpl_vars['merchantID']->value;?>
"
                 alt="<?php echo smartyTranslate(array('s'=>'Tarjeta bancaria','mod'=>'khipupayment'),$_smarty_tpl);?>
"/>
            <?php echo smartyTranslate(array('s'=>'Tarjeta bancaria','mod'=>'khipupayment'),$_smarty_tpl);?>

        </a>
    </p>
<?php }?>
<?php }} ?>
