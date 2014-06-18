<?php
echo validation_errors();
echo form_open('user/saveEdit'); ?>

<input type="hidden" class="form-control span5" name="id" value="<?php echo $user->id?>">
<div class="form-group">
        <label class="control-label col-sm-3">Username *</label>
        <div class="col-sm-9">
                <input type="text" class="form-control span5" name="user" value="<?php echo $user->username?>" disabled>
        </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-3">Peran *</label>
        <div class="col-sm-9">
                <?php $selected = ($user->role == 1) ? 'selected' : NULL ; ?>
                <select class="form-control" name="role">
                        <option value="0">User</option>
                        <option value="1" <?php echo $selected?>>Admin</option>
                </select><br>
        </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-3">Status *</label>
        <div class="col-sm-9">
                <?php $selected = ($user->active == 1) ? 'selected' : NULL ; ?>
                <select class="form-control" name="status">
                        <option value="0">Tidak Aktif</option>
                        <option value="1" <?php echo $selected?>>Aktif</option>
                </select><br>
        </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-3">Nama Lengkap *</label>
        <div class="col-sm-9">
                <input type="text" class="form-control span5" name="full_name" value="<?php echo $user->full_name?>">
        </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-3">Email</label>
        <div class="col-sm-9">
                <input type="text" class="form-control span5" name="email" value="<?php echo $user->email?>">
        </div>
</div>
<div class="text-left">
	<label class="control-label col-sm-3"></label>
	<div class="col-sm-2">
        <input type="submit" class="btn btn-default" value="Ubah"/>
</div></div>
<?php echo form_close(); ?>
