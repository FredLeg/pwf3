 {include file="admin/partials/header.tpl"}

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Dashboard</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->

	{if $user->isRole('dev')}
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Developers</h1>
			Nom: {$user->firstname}<br>
			id: {$user->id}<br>
			rôles: {implode(', ',$user->roles)}<br>
			dev?: {(int)$user->isRole('dev')}<br>
			prof?: {(int)$user->isRole('prof')}<br>
			<pre style="float:left">{print_r($pages)}</pre>
			<pre style="float:left">{print_r($menu)}</pre>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	{/if}

{include file="admin/partials/footer.tpl"}
