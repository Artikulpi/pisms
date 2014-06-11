<table class="table table-striped">
	<thead>
		<th>No. Tujuan</th>
		<th>Isi</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</thead>
	<?php
	foreach ($outbox as $row) { 
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$delete = anchor('outbox/delete/'.$row->ID,'<span class="glyphicon glyphicon-trash"></span>', $onclick);
		?>
		<tr>
			<td><?php echo $row->DestinationNumber;?></td>
			<td><?php echo $row->TextDecoded;?></td>
			<td><?php echo $row->SendingDateTime;//date ("D, d M Y H:i:s",strtotime($row->SendingDateTime));?></td>
			<td><?php echo $delete;?></td>
		</tr>

		<?php
	}
	?>
</table>
<div class="text-right"><?php echo $halaman?></div>

