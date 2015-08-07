		<form id="{$id}" name="{$name}" class="{$class}" action="{$action}" method="{$method}" novalidate>

			{section name=id loop=$hidden_fields}
				<input type="{$hidden_fields[id]->type}" name="{$hidden_fields[id]->name}" value="{$hidden_fields[id]->value}" />
			{/section}


			{section name=key loop=$fields}

				{assign var=disabled value=''}
				{assign var=disabled_name value=''}
				{if $fields[key]->disabled === true}
					{assign var=disabled value='disabled'}
					{assign var=disabled_name value='-disabled'}
				{/if}

				{if $fields[key]->disabled}
					<input type="hidden" id="{$fields[key]->name}" name="{$fields[key]->name}" value="{$fields[key]->value}">
				{/if}

				<div class="form-group{if !empty($isSubmit)}{if !empty($fields[key]->error)} has-error{else} has-success{/if}{/if}">

					{if $fields[key]->type == 'text' ||
						$fields[key]->type == 'email' ||
						$fields[key]->type == 'date' ||
						$fields[key]->type == 'password'}
					<label for="{$fields[key]->name}{$disabled_name}" class="col-sm-2 control-label">{$fields[key]->label}</label>
					<div class="col-sm-10">
						<input type="{$fields[key]->type}" class="form-control{if $fields[key]->required} required{/if}{$fields[key]->class}" id="{$fields[key]->name}{$disabled_name}" name="{$fields[key]->name}{$disabled_name}" {if isset($fields[key]->maxlength) && $fields[key]->maxlength > 0} maxlength="{$fields[key]->maxlength}"{/if} placeholder="{$fields[key]->label}" value="{$fields[key]->value}" {$disabled}>
					</div>
					{/if}

					{if $fields[key]->type == 'checkbox'}
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label for="{$fields[key]->name}{$disabled_name}">
								<input type="{$fields[key]->type}" class="{if $fields[key]->required} required{/if}{$fields[key]->class}" id="{$fields[key]->name}{$disabled_name}" name="{$fields[key]->name}{$disabled_name}" {if isset($fields[key]->maxlength) && $fields[key]->maxlength > 0} maxlength="{$fields[key]->maxlength}"{/if} value="1"{if $fields[key]->value == '1'} checked="checked"{/if} {$disabled}> {$fields[key]->label}
							</label>
						</div>
					</div>
					{/if}

					{if $fields[key]->type == 'select'}
					<label for="{$fields[key]->name}{$disabled_name}" class="col-sm-2 control-label">{$fields[key]->label}</label>
					<div class="col-sm-10">
						<select id="{$fields[key]->name}{$disabled_name}" name="{$fields[key]->name}{$disabled_name}" class="form-control{if $fields[key]->required} required{/if}{$fields[key]->class}" {$disabled}>
							<option value="">...</option>
							{section name=index loop=$fields[key]->multi_values}
							<option value="{$fields[key]->multi_values[index]['id']}"{if $fields[key]->value == $fields[key]->multi_values[index]['id']} selected="selected"{/if}>{$fields[key]->multi_values[index]['name']}</option>
							{/section}
						</select>
					</div>
					{/if}

					{if $fields[key]->type == 'textarea'}
					<label for="{$fields[key]->name}{$disabled_name}" class="col-sm-2 control-label">{$fields[key]->label}</label>
					<div class="col-sm-10">
						<textarea id="{$fields[key]->name}{$disabled_name}" name="{$fields[key]->name}{$disabled_name}" class="form-control{if $fields[key]->required} required{/if}{$fields[key]->class}" placeholder="{$fields[key]->label}" col="10" rows="3" {$disabled}>{$fields[key]->value}</textarea>
					</div>
					{/if}

					{*
					{if $fields[key]->type == 'file'}
					<label for="{$fields[key]->name}{$disabled_name}" class="col-sm-2 control-label">{$fields[key]->label}</label>
					<div class="col-sm-10">
				    	<input type="file" id="{$fields[key]->name}{$disabled_name}" name="{$fields[key]->name}{$disabled_name}" class="{$fields[key]->class}" {$disabled}>
				    </div>
					{/if}
					*}

					{if $fields[key]->type == 'filecrop'}
					<label for="{$fields[key]->name}{$disabled_name}" class="col-sm-2 control-label">{$fields[key]->label}crop</label>
					<div class="col-sm-10">

							{if !empty($fields[key]->value)}
								{include file="admin/partials/crop.tpl" picture="http://192.168.1.19/public/statics/img/trombino/10/{$fields[key]->value}"}
							{else}
				    	<input type="file" id="{$fields[key]->name}{$disabled_name}" name="{$fields[key]->name}{$disabled_name}" class="{$fields[key]->class}" {$disabled}>
				    	{/if}
				   </div>
					{/if}


					{if !empty($isSubmit) && !empty($fields[key]->error) && $fields[key]->error !== true}
					<label class="col-sm-2"></label>
					<div class="col-sm-10 error" role="alert">
						<span class="glyphicon glyphicon-warning-sign"></span> {$fields[key]->error}
					</div>
					{/if}

				</div>

			{/section}

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">{t}Send{/t}</button>
				</div>
			</div>
</div>
		</form>


<!--<script type="text/javascript">

	var $image = $('#cropper-example-2 > img'),
    cropBoxData,
    canvasData;

$('#cropper-example-2-modal').on('shown.bs.modal', function () {
  $image.cropper({
    autoCropArea: 0.5,
    built: function () {
      // Strict mode: set crop box data first
      $image.cropper('setCropBoxData', cropBoxData);
      $image.cropper('setCanvasData', canvasData);
    }
  });
}).on('hidden.bs.modal', function () {
  cropBoxData = $image.cropper('getCropBoxData');
  canvasData = $image.cropper('getCanvasData');
  $image.cropper('destroy');
});
</script>
-->

