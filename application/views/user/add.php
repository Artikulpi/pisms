<?php
echo validation_errors();
echo form_open('user/add'); ?>

<div class="form-group">
        <label class="control-label col-sm-3">Username *</label>
        <div class="col-sm-9">
                <input type="text" class="form-control span5" name="user" placeholder="Username">
        </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-3">Password *</label>
        <div class="col-sm-9">
                <input type="password" class="form-control span5" name="pass" placeholder="Password">
        </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-3">Konfirmasi Password *</label>
        <div class="col-sm-9">
                <input type="password" class="form-control span5" name="passconf" placeholder="Konfirmasi Password">
        </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-3">Role *</label>
        <div class="col-sm-9">
                <select class="form-control" name="role">
                        <option value="0">User</option>
                        <option value="1">Admin</option>
                </select><br>
        </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-3">Fullname *</label>
        <div class="col-sm-9">
                <input type="text" class="form-control span5" name="full_name" placeholder="Nama Lengkap">
        </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-3">Email</label>
        <div class="col-sm-9">
                <input type="text" class="form-control span5" name="email" placeholder="Email">
        </div>
</div>
<div class="text-left">
	<label class="control-label col-sm-3"></label>
	<div class="col-sm-2">
        <input type="submit" class="btn btn-success" value="Tambah"/>
</div></div>
<?php echo form_close(); ?>
