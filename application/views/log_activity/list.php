<table class="table table-striped">
	<thead>
		<th>ID User</th>
		<th>Aktifitas</th>
		<th>Tanggal</th>
		<th>Modul</th>
	</thead>
	<?php
	foreach ($log as $row) { ?>
	<tr>
		<td><?php echo $row->user_id;?></td>
		<td><?php echo $row->activity;?></td>
		<td><?php echo date ("D, d M Y H:i:s",strtotime($row->date));?></td>
		<td><?php echo $row->module;?></td>
	</tr>

	<?php
}
?>
</table>
<div class="text-right"><?php echo $halaman?></div>