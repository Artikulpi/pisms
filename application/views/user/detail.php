
<table class="table table-striped">
	<thead>
		<th>Username</th>
		<th>Peran</th>
		<th>Nama Lengkap</th>
		<th>Email</th>
		<th>Status</th>
		<th>Aksi</th>
	</thead>
	<tbody>

<tr>
<td><?php echo $user->username;?></td>

<td><?php echo $user->role;?></td>

<td><?php echo $user->full_name;?></td>

<td><?php echo $user->email;?></td>

<td><?php echo ($user->active == 1) ? 'Aktif' : 'Tidak Aktif';?></td>


<td>
	<a href="<?php echo site_url('user/edit/'.$user->id)?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="bottom" title="Ubah"> ubah user</a>
	<a href="<?php echo site_url('user/reset/'.$user->id)?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="bottom" title="Ganti Password"> ubah password</a>
	<a href="<?php echo site_url('user/delete/'.$user->id)?>" class="btn btn-default btn-xs" onclick="return confirm('Are you sure you want to delete this item?');"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"> hapus</a>
</td>
</tr>
</tbody>
</table>
</div></div>