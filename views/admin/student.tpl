{include file="admin/partials/header.tpl"}

{* Titre et bouton Ajouter *}
	<h1 class="page-header">Étudiants
	{if empty($form)}
		{if $canAddStudent}
			{assign var=promo value=$request->get('promo', $promo_id)}
			<a href="{$HTTP_ROOT}admin/student/create{if !empty($promo)}?promo={$promo}{/if}" class="btn btn-primary" style="float:right">Ajouter</a>
		{/if}
	{/if}
	</h1>

{* Liste des écoles *}
	{if empty($form)}
		{if !empty($schools)}
			<div class="row">
				<label for="school" class="col-sm-1 control-label">École</label>
				<div class="col-sm-4">
				<select id="school_select" name="school" class="form-control required">
					{foreach $schools as $school}
						<option value="{$school->id}" {if $school->id==$school_id} selected{/if}>{$school->name}</option>
					{/foreach}
				</select>
				<br>
				</div>
			</div>
		{/if}
	{/if}

{* Liste des promotions *}
	{if empty($form)}
		{if $user->isRole('pdt') or $user->isRole('admin') or $user->isRole('dir')}
			<div class="row">
				<label for="promo" class="col-sm-1 control-label">Promotion</label>
				<div class="col-sm-4">
				<select id="promo_select" name="promo" class="form-control required">
					{foreach $promos as $promo}
						<option value="{$promo->id}" {if $promo->id==$promo_id} selected{/if}>{$promo->label}</option>
					{/foreach}
				</select>
				</div>
			</div>
			<hr>
		{/if}
	{/if}

{* La table des élèves *}
	{include file="admin/partials/base.tpl" entity_name="student" back_link="{$HTTP_ROOT}admin/student"}

{include file="admin/partials/footer.tpl"}


{if empty($form)}
	{if $user->isRole('admin') or $user->isRole('dir')}
		<script>
			$(function() {
				var HTTP_ROOT = '{$HTTP_ROOT}'
				$('#school_select').on('change',function(){
					window.location = HTTP_ROOT+'admin/student?school='+this.value
				})
				$('#promo_select').on('change',function(){
					window.location = HTTP_ROOT+'admin/student?promo='+this.value
				})
			})
		</script
	{/if}
{/if}
