<img src="{$img_header}"/>

<h2>{l s='Pago con tarjetas de crédito o débito usando Flow' mod='flowpayment'}</h2>

<fieldset>
    <legend><img src="../img/admin/warning.gif"/>{l s='Information' mod='flowpayment'}</legend>
    <div class="margin-form">Module version: {$version}</div>
    
</fieldset>

<form action="{$post_url}" method="post" enctype="multipart/form-data" style="clear: both; margin-top: 10px;">
    <fieldset>
		
	    <legend><img src="../img/admin/contact.gif"/>{l s='Settings' mod='flow'}</legend>
	    
	    <label for="platformType">{l s='Plataforma de Flow' mod='flowpayment'}</label>
	    <div class="margin-form">
		    <select name="platformType">
		    	<option value="test" {if $data_platformType eq "test"}selected{/if}>Plataforma de pruebas de Flow</option>
				<option value="real" {if $data_platformType eq "real"}selected{/if}>Plataforma oficial de Flow</option>
			</select>
		</div>
		{if isset($errors.title)}
            <div class="error">
                <p>{$errors.title}</p>
            </div>
        {/if}

        <label for="title">{l s='Nombre del medio de pago' mod='flowpayment'}</label>

        <div class="margin-form"><input type="text" size="60" id="title" name="title" maxsize="100"
                                        value="{$data_title}" placeholder="Ingrese el nombre que se mostrará al usuario"/></div>		
	    {if isset($errors.idComercio)}
            <div class="error">
                <p>{$errors.idComercio}</p>
            </div>
        {/if}

        <label for="idComercio">{l s='ID Comercio Flow' mod='flowpayment'}</label>

        <div class="margin-form"><input type="text" size="33" id="idComercio" name="idComercio"
                                        value="{$data_idComercio}"/></div>
        {if isset($errors.privateKey)}
            <div class="error">
                <p>{$errors.privateKey}</p>
            </div>
        {/if}
		<label for="privateKey">{l s='Llave privada Flow' mod='flowpayment'}</label>

        <div class="margin-form">{$data_privateKeyInfo}<input type="file" name="privateKey" /></div>
        
	    <label for="skipType">{l s='Modo de acceso a Webpay' mod='flowpayment'}</label>
	    <div class="margin-form">
		    <select name="skipType">
		    	<option value="d" {if $data_skipType eq "d"}selected{/if}>Ingresar directamente a Webpay</option>
				<option value="f" {if $data_skipType eq "f"}selected{/if}>Mostrar pasarela Flow</option>
			</select>
		</div>
        
	    {if isset($errors.additional)}
            <div class="error">
                <p>{$errors.additional}</p>
            </div>
        {/if}

        <label for="additional">{l s='Cobro adicional (en %)' mod='flowpayment'}</label>

        <div class="margin-form"><input type="text" size="5" id="additional" name="additional"
                                        value="{$data_additional}"/></div>
                                        
        <center><input type="submit" name="flow_updateSettings" value="{l s='Save Settings' mod='flowpayment'}"
                       class="button" style="cursor: pointer; display:"/></center>
    </fieldset>
</form>
