<table class="table table-striped">
	
	<thead>
		<th>Nama</th>
		<th>Aksi</th>
	</thead>
	<?php
	foreach ($contact as $row) {
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$edit = anchor('contact/edit/'.$row->id,'<span class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="Ubah"></span></span>');
		$delete = anchor('contact/delete/'.$row->id,'<span class="btn btn-sm btn-success"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></span></span>', $onclick);
		?>
		<tr>
			<td><?php echo anchor('contact/detail/'.$row->id,$row->name)?></td>

			<td><?php echo $edit.'&nbsp;'.$delete?></td>
		</tr>
		<?php
	} ?>  
</table>
<br>
<a href="<?php echo site_url('contact/add')?>" class="btn btn-success btn-md"><b>+</b> Tambah Kontak</a>

<div class="text-right"><?php echo $halaman?></div>