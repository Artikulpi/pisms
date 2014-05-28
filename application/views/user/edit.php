<?php
echo validation_errors();
echo form_open('user/saveEdit'); ?>

<div class="form-group">
        <label class="control-label col-sm-3">Username *</label>
        <div class="col-sm-9">
                <input type="text" class="form-control span5" name="user" value="<?=$user->username?>" disabled>
        </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-3">Role *</label>
        <div class="col-sm-9">
                <?php $selected = ($user->role == 1) ? 'selected' : NULL ; ?>
                <select class="form-control" name="role">
                        <option value="0">General</option>
                        <option value="1" <?=$selected?>>Admin</option>
                </select>
        </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-3">Status *</label>
        <div class="col-sm-9">
                <?php $selected = ($user->active == 1) ? 'selected' : NULL ; ?>
                <select class="form-control" name="role">
                        <option value="0">Tidak Aktif</option>
                        <option value="1" <?=$selected?>>Aktif</option>
                </select>
        </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-3">Fullname *</label>
        <div class="col-sm-9">
                <input type="text" class="form-control span5" name="full_name" value="<?=$user->full_name?>">
        </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-3">Email</label>
        <div class="col-sm-9">
                <input type="text" class="form-control span5" name="email" value="<?=$user->email?>">
        </div>
</div>
<div class="text-center">
        <input type="submit" class="btn btn-success" value="Tambah"/>
</div>
<?php echo form_close(); ?>
