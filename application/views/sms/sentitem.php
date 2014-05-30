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
		<td><?=$row->DestinationNumber;?></td>
		<td><?=$row->TextDecode;?></td>
		<td><?=date ("D, d M Y H:i:s",strtotime($row->SendingDateTime));?></td>
		<td><?='-';?></td>
	</tr>

	<?php
}
?>
</table>
<div class="text-right"><?=$halaman?></div>