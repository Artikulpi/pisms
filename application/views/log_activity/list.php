<table class="table table-striped">
	<thead>
		<th>No</th>
		<th>ID User</th>
		<th>Aktifitas</th>
		<th>Tanggal</th>
		<th>Modul</th>
	</thead>
	<?php $no=1;
	foreach ($log as $row) { ?>
	<tr>
		<td><?=$no;?></td>
		<td><?=$row->user_id;?></td>
		<td><?=$row->activity;?></td>
		<td><?=date ("D, d M Y H:i:s",strtotime($row->date));?></td>
		<td><?=$row->module;?></td>
	</tr>

	<?php
}
?>
</table>
<div class="text-right"><?=$halaman?></div>