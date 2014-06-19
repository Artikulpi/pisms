<table class="table table-striped">
	<thead>
		<th>User</th>
		<th>Aktifitas</th>
		<th>Tanggal</th>
		<th>Modul</th>
	</thead>
	<tbody>
	<?php
	foreach ($log as $row) { ?>
	<tr>
		<td><?php
		foreach ($user as $key) {
			if($key->id == $row->user_id){
				echo $key->username;
			}
		}
		$row->user_id;?>
	</td>
	<td><?php echo $row->activity;?></td>
	<td><?php echo $row->date;//date ("D, d M Y H:i:s",strtotime($row->date));?></td>
	<td><?php echo $row->module;?></td>
</tr>

<?php
}
?>
</tbody>
</table>

<div class="text-right"><?php echo $halaman?></div>