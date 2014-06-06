<table class="table table-striped">
	<thead>
		<th>No. Tujuan</th>
		<th>Isi</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</thead>
	<?php
	foreach ($sentitem as $row) { ?>
	<tr>
		<td><?php echo $row->DestinationNumber;?></td>
		<td><?php echo $row->TextDecode;?></td>
		<td><?php echo $row->SendingDateTime;//date ("D, d M Y H:i:s",strtotime($row->SendingDateTime));?></td>
		<td><?php echo '-';?></td>
	</tr>

	<?php
}
?>
</table>
<div class="text-right"><?php echo $halaman?></div>