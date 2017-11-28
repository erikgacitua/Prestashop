{capture name=path}{l s='Pago a través de Flow' mod='flowpayment'}{/capture}
<h2>{l s='Order summary' mod='cheque'}</h2>

{assign var='current_step' value='payment'}
{include file="$tpl_dir./order-steps.tpl"}
{include file="$tpl_dir./errors.tpl"}

<form method="post" action="{$flow_action}">
<input type="hidden" name="parameters" value="{$flow_request}" />
	<div class="row row-margin-bottom">
		<div class="col-sm-6">
			{if $flow_additional>0}
			<div class="warn">
			Se realizará un cobro adicional de ${$flow_additional} correspondiente a un {$flow_percent}% de ${$flow_amount_order}.
			</div>
        	{/if}
			El pago total se realizará a través de FLOW por ${$flow_amount}.
		</div>
		<div class="col-sm-6">
			<button type="submit" class="button btn btn-default standard-checkout button-medium pull-right">
				<span>Pagar <i class="icon-chevron-right right"></i></span>
			</button>
		</div>
	</div>
</form>

