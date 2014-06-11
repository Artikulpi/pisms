<table class="table table-striped">
	<thead>
		<th>Grup</th>
		<th>Aksi</th>
	</thead>
	<?php
	foreach ($group as $row) {
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$edit = anchor('pigroup/edit/'.$row->id,'<span class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="Ubah"></span></span>');
		$delete = anchor('pigroup/delete/'.$row->id,'<span class="btn btn-sm btn-success"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></span></span>', $onclick);
		?>
		<tr>
			<td><?php echo anchor('pigroup/detail/'.$row->id, $row->group_name)?></td>
			<td><?php echo $edit.'&nbsp;'.$delete?></td>
		</tr>
		<?php
	} ?>  
</table>
<br>
<a href="<?php echo site_url('pigroup/add')?>" class="btn btn-success btn-md"><b>+</b> Tambah Grup</a>
<div class="text-right"><?php echo $halaman?></div>