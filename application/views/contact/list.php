<table class="table table-striped">
	<thead>
		<th>Nama</th>
		<th>Aksi</th>
	</thead>
	<?php
	foreach ($contact as $row) {
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$edit = anchor('contact/edit/'.$row->id,'<span class="glyphicon glyphicon-edit"></span>');
		$delete = anchor('contact/delete/'.$row->id,'<span class="glyphicon glyphicon-trash"></span>', $onclick);
		?>
		<tr>
			<td><?php echo anchor('contact/detail/'.$row->id,$row->name)?></td>

			<td><?=$edit.'&nbsp;'.$delete?></td>
		</tr>
		<?php
	} ?>  
</table>
<br>
<a href="<?=site_url('contact/add')?>" class="btn btn-success">Tambah Kontak</a>
<div class="text-right"><?=$halaman?></div>