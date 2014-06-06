<?php
echo validation_errors();
echo form_open('user/saveReset'); ?>
<input type="hidden" value="<?php echo $user->id?>" name="id">
<div class="form-group">
	<label class="control-label col-sm-3">Password Baru *</label>
	<div class="col-sm-9">
		<input type="password" class="form-control span5" name="pass" placeholder="Password">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-3">Konfirmasi Password Baru *</label>
	<div class="col-sm-9">
		<input type="password" class="form-control span5" name="passconf" placeholder="Konfirmasi Password">
	</div>
</div>
<div class="text-left">
	<label class="control-label col-sm-3"></label>
	<div class="col-sm-2">
	<input type="submit" class="btn btn-success" value="Ubah"/>
</div></div>
<?php echo form_close(); ?>