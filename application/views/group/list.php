<table class="table table-striped">
	<thead>
		<th>No</th>
		<th>Grup</th>
		<th>Aksi</th>
	</thead>
	<?php
	$no=1;
	foreach ($group as $row) {
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$edit = anchor('group/edit/'.$row->id,'<span class="glyphicon glyphicon-edit"></span>');
		$delete = anchor('group/delete/'.$row->id,'<span class="glyphicon glyphicon-trash"></span>', $onclick);
		?>
		<tr>
			<td><?=$no?></td>
			<td><?=$row->group_name?></td>
			<td><?=$edit.'&nbsp;'.$delete?></td>
		</tr>
		<?php
		$no++;
	} ?>  
</table>
<br>
<a href="<?=site_url('group/add')?>" class="btn btn-success">Tambah Grup</a>
<div class="text-right"><?=$halaman?></div>