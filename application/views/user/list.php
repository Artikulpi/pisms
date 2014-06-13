<table class="table table-striped">
	<thead>
		<th>No</th>
		<th>Username</th>
		<th>Nama Lengkap</th>
		<th>Email</th>
		<th>Role</th>
		<th>Status</th>
		<th>Aksi</th>
	</thead>

	<?php
	$no = 1;
	foreach ($user as $row) {
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$reset = anchor('user/reset/'.$row->id,'<span class="btn btn-xs btn-info"><span class="glyphicon glyphicon-wrench" data-toggle="tooltip" data-placement="bottom" title="Reset"></span></span>');
		$edit = anchor('user/edit/'.$row->id,'<span class="btn btn-xs btn-info"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="Ubah"></span></span>');
		$delete = anchor('user/delete/'.$row->id,'<span class="btn btn-xs btn-info"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></span></span>', $onclick);
		?>
		<tr>
			<td><?php echo $no?></td>
			<td><?php echo anchor('user/detail/'.$row->id, $row->username)?></td>
			<td><?php echo $row->full_name?></td>
			<td><?php echo $row->email?></td>
			<td><?php echo ($row->role == 1) ? 'Admin' : 'User' ;?></td>
			<td><?php echo ($row->active == 1) ? 'Aktif' : 'Tidak aktif' ;?></td>
			<td><?php echo $edit.'&nbsp;'.$delete?></td>
		</tr>
		<?php
		$no++;
	} ?>
</table>
<br>
<a href="<?php echo site_url('user/add')?>" class="btn btn-info btn-md"><b>+</b> Tambah User</a>
<div class="text-right"><?php echo $halaman?></div>