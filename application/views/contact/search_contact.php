<table class="table table-striped">
	<thead>
		<th>Nama</th>
		<th>No Telepon</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php foreach ($contact as $key) {
			$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
			$edit = anchor('contact/edit/'.$key->id,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="Ubah kontak"> ubah</span></span>');
			$delete = anchor('contact/delete/'.$key->id,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus kontak"> hapus</span></span>', $onclick);
			?>	
			<tr>
				<td><?php echo anchor('contact/detail/'.$key->id, $key->name)?></td>
				<td><?php echo $key->phone_number?></td>
				<td><?php echo $edit.' '.$delete?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>