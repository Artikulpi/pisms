<table class="table table-striped">
	<thead>
		<th>Dari</th>
		<th>Isi</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</thead>
	<?php
	foreach ($inbox as $row) { ?>
	<tr>
		<td><?=$row->SenderNumber;?></td>
		<td><?=$row->TextDecode;?></td>
		<td><?=date ("D, d M Y H:i:s",strtotime($row->ReceivingDateTime));?></td>
		<td><?='-';?></td>
	</tr>

	<?php
}
?>
</table>
<div class="text-right"><?=$halaman?></div>