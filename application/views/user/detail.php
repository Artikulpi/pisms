<span class="label label-success">Username</span>
<br>
<?php echo $user->username;?>
<br>
<span class="label label-success">Role</span>
<br>
<?php echo $user->role;?>
<br>
<span class="label label-success">Nama Lengkap</span>
<br>
<?php echo $user->full_name;?>
<br>
<span class="label label-success">Email</span>
<br>
<?php echo $user->email;?>
<br>
<span class="label label-success">Status</span>
<br>
<?php echo ($user->active == 1) ? 'Aktif' : 'Tidak Aktif';?>
<br>

<div class="text-right">
	<a href="<?php echo site_url('user/edit/'.$user->id)?>" class="btn btn-success btn-xs">Ubah</a>
	<a href="<?php echo site_url('user/reset/'.$user->id)?>" class="btn btn-warning btn-xs">Ganti Password</a>
	<a href="<?php echo site_url('user/delete/'.$user->id)?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a>
</div>
