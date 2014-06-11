<table class="table table-striped">
	<thead>
		<th>Nomor tujuan</th>
		<th>Isi</th>
		<th>Aksi</th>
	</thead>
	<?php
	foreach ($draft as $row) {
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$edit = anchor('sms/editDraft/'.$row->id,'<span class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="Ubah"></span></span>');
		$delete = anchor('sms/deleteDraft/'.$row->id,'<span class="btn btn-sm btn-success"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></span></span>', $onclick);
		?>
		<tr>
			<td><?php echo $row->number;?></td>
			<td><?php echo $row->content;?></td>
			<td><?php echo $edit.' '.$delete;?></td>
		</tr>

		<?php
	}
	?>
</table>
<div class="text-right"><?php echo $halaman?></div>