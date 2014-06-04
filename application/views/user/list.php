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
		$reset = anchor('user/reset/'.$row->id,'<span class="glyphicon glyphicon-wrench"></span>');
		$edit = anchor('user/edit/'.$row->id,'<span class="glyphicon glyphicon-edit"></span>');
		$delete = anchor('user/delete/'.$row->id,'<span class="glyphicon glyphicon-trash"></span>', $onclick);
		?>
		<tr>
			<td><?=$no?></td>
			<td><?=$row->username?></td>
			<td><?=$row->full_name?></td>
			<td><?=$row->email?></td>
			<td><?=($row->role == 1) ? 'Admin' : 'General' ;?></td>
			<td><?=($row->active == 1) ? 'Aktif' : 'Tidak aktif' ;?></td>
			<td><?=$reset.'&nbsp;'.$edit.'&nbsp;'.$delete?></td>
		</tr>
		<?php
		$no++;
	} ?>
</table>
<br>
<a href="<?=site_url('user/add')?>" class="btn btn-success">Tambah User</a>
<div class="text-right"><?=$halaman?></div>