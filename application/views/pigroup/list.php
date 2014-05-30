<table class="table table-striped">
	<thead>
		<th>Grup</th>
		<th>Aksi</th>
	</thead>
	<?php
	foreach ($group as $row) {
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$edit = anchor('pigroup/edit/'.$row->id,'<span class="glyphicon glyphicon-edit"></span>');
		$delete = anchor('pigroup/delete/'.$row->id,'<span class="glyphicon glyphicon-trash"></span>', $onclick);
		?>
		<tr>
			<td><?=$row->group_name?></td>
			<td><?=$edit.'&nbsp;'.$delete?></td>
		</tr>
		<?php
	} ?>  
</table>
<br>
<a href="<?=site_url('pigroup/add')?>" class="btn btn-success">Tambah Grup</a>
<div class="text-right"><?=$halaman?></div>