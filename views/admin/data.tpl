 {include file="admin/partials/header.tpl"}

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->

	<table border="1px">
	{foreach $datas as $data}
		<tr>
			{foreach $data->getFields() as $key => $item}
				<td>{$data->$key}</td>
			{/foreach}
		</tr>
	{/foreach}
	</table>
	<br>
	<table border="1px">
	{foreach $presences as $data}
		<tr>
			{foreach $data as $key => $item}
				<td>{$data[$key]}</td>
			{/foreach}
		</tr>
	{/foreach}
	</table>

{include file="admin/partials/footer.tpl"}
