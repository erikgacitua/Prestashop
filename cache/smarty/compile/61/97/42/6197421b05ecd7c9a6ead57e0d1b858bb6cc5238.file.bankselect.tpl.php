<?php /* Smarty version Smarty-3.1.19, created on 2017-09-28 17:00:20
         compiled from "/var/www/html/prestashop/modules/khipupayment/views/templates/front/bankselect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141585639359cd54d49c6e19-99173804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6197421b05ecd7c9a6ead57e0d1b858bb6cc5238' => 
    array (
      0 => '/var/www/html/prestashop/modules/khipupayment/views/templates/front/bankselect.tpl',
      1 => 1506625540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141585639359cd54d49c6e19-99173804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'request' => 0,
    'key' => 0,
    'value' => 0,
    'banks' => 0,
    'bank' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cd54d4a75d82_37710537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cd54d4a75d82_37710537')) {function content_59cd54d4a75d82_37710537($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Seleccione el banco','mod'=>'khipupayment'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<h2><?php echo smartyTranslate(array('s'=>'Resumen del pedido','mod'=>'khipupayment'),$_smarty_tpl);?>
</h2>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<h2><?php echo smartyTranslate(array('s'=>'Escoge el banco para pagar','mod'=>'khipupayment'),$_smarty_tpl);?>
</h2>

<form method='POST' action='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
' class='form form-horizontal'>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['request']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['key']->value!="fc"&&$_smarty_tpl->tpl_vars['key']->value!="module"&&$_smarty_tpl->tpl_vars['key']->value!="controller") {?>
        <input type="hidden" value ="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
    <?php }?>
<?php } ?>

<input type="hidden" value ="payment" name="controller">
<input type="hidden" value ="module" name="fc">
<input type="hidden" value ="khipupayment" name="module">

    <div class="row row-margin-bottom">
        <div class="col-sm-6">
            <select id="root-bank" name="root-bank" style="width: auto;" class="input-lg"></select>
            <select id="bank-id" name="bank-id" style="display: none; width: auto;" class="input-lg"></select>
        </div>
        <div class="col-sm-6">
            <button type="submit" class="button btn btn-default standard-checkout button-medium pull-right">
                <span><?php echo smartyTranslate(array('s'=>'Continuar','mod'=>'khipupayment'),$_smarty_tpl);?>
 <i class="icon-chevron-right right"></i></span>
            </button>
        </div>
    </div>
</form>
<script>
    (function ($) {
        var messages = [];
        var bankRootSelect = $('#root-bank');
        var bankOptions = [];
        var selectedRootBankId = 0;
        var selectedBankId = 0;
        bankRootSelect.attr("disabled", "disabled");
        <?php  $_smarty_tpl->tpl_vars['bank'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bank']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bank']->key => $_smarty_tpl->tpl_vars['bank']->value) {
$_smarty_tpl->tpl_vars['bank']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['bank']->value->getParent()=='') {?>
                bankRootSelect.append('<option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['bank']->value->getBankId(), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['bank']->value->getName(), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>');
                bankOptions['<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['bank']->value->getBankId(), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
'] = [];
                bankOptions['<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['bank']->value->getBankId(), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
'].push('<option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['bank']->value->getBankId(), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['bank']->value->getType(), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>');
            <?php } else { ?>
                bankOptions['<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['bank']->value->getParent(), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
'].push('<option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['bank']->value->getBankId(), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['bank']->value->getType(), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>');
            <?php }?>
        <?php } ?>

        function updateBankOptions(rootId, bankId) {
            if (rootId) {
                $('#root-bank').val(rootId);
            }

            var idx = $('#root-bank :selected').val();
            $('#bank-id').empty();
            var options = bankOptions[idx];
            for (var i = 0; i < options.length; i++) {
                $('#bank-id').append(options[i]);
            }
            if (options.length > 1) {
                $('#bank-id').show();
            } else {
                $('#bank-id').hide();
            }
            if (bankId) {
                $('#bank-id').val(bankId);
            }
            $('#bank-id').change();
        }
        $('#root-bank').change(function () {
            updateBankOptions();
        });
        $(document).ready(function () {
            updateBankOptions(selectedRootBankId, selectedBankId);
            bankRootSelect.removeAttr("disabled");
        });
    })(jQuery);
</script><?php }} ?>
