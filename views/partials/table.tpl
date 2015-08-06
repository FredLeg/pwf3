<table class="table table-striped table-bordered table-hover" id="{$table->id}">
	<thead>
		<tr>
			{foreach $table->cols as $col}
			<th>{$col|ucfirst}</th>
			{/foreach}
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
	{$i = 0}
	{foreach $table->data as $data}
		<tr class="{if $i % 2 === 0}odd{else}even{/if}">
			{foreach $table->cols as $col}
			<td>{$data->$col}</td>
			{/foreach}
			<td class="center">
				{if $table->entity == 'student'}
					<a href="presences/{$data->id}"><i class="fa fa-bar-chart fa-fw"></i></a>
				{/if}
				{if !empty($table->edit_url)}<a href="{$table->edit_url}/{$data->id}"><i class="fa fa-pencil fa-fw"></i></a>{/if}
				{if !empty($table->delete_url)}<a href="{$table->delete_url}/{$data->id}" onclick="if(confirm('{t}Are you sure you want to delete this{/t} {$table->entity} ({$data->id}) ?')) { return true } return false"><i class="fa fa-trash fa-fw"></i></a>{/if}

			</td>
		</tr>
		{assign var=i value=$i + 1}
	{/foreach}
	</tbody>
</table>
