
<!-- Submitted to Feature  March 2, 2014  2:42pm  -->
<div class="container-fluid">
<div class="row">
<!-- Button trigger modal -->
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal">  <img src="<?php echo base_url();?>media/img/Manager.png" alt="" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h3><?php echo $user->username;?></h3>
        <em>Klik foto untuk melihat detail profil.</em>
		</center>
    </div>
<!--  embed coe, just change id Name for your own profile -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title" id="myModalLabel"><?php echo $user->username;?>, <small>piSMS</small></h4>
</div>
<div class="modal-body">
	
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
<hr>
<div class="text-right">
	<a href="<?php echo site_url('user/edit/'.$user->id)?>" class="btn btn-success btn-xs">Ubah</a>
	<a href="<?php echo site_url('user/reset/'.$user->id)?>" class="btn btn-warning btn-xs">Ganti Password</a>
	<a href="<?php echo site_url('user/delete/'.$user->id)?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a>
</div>

<!--  embed coe, just change id Name for your own profile -->
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div> <!-- #/myModal -->


</div> <!-- ./row-->
</div> <!-- ./container-->

