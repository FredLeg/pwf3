{include file="admin/partials/header.tpl"}

	<h1 class="page-header">Étudiants</h1>

	{if empty($form)}

	{if $user->isRole('admin') or $user->isRole('dir')}
		<a href="{$HTTP_ROOT}admin/student/create" class="btn btn-primary">Ajouter</a>
	{/if}

	{if $user->isRole('dir')}
		<div class="form-group">
			<label for="gender" class="col-sm-2 control-label">Promotion</label>
			<div class="col-sm-10">
			<select id="propotion_id" name="gender" class="form-control required">
				<option value="10" selected="selected">Avril-Août 2015</option>
				<option value="11">Août-Décembre 2015</option>
			</select>
			</div>
		</div>
		<hr>
		<hr>
	{/if}

	{/if}

	{include file="admin/partials/base.tpl" entity_name="student" back_link="{$HTTP_ROOT}admin/student"}



{include file="admin/partials/footer.tpl"}
