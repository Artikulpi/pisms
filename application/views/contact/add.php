<?php
echo validation_errors();
echo form_open('contact/add'); ?>

<div class="form-group">
	<label class="control-label col-sm-3">Nama *</label>
	<div class="col-sm-9">
		<input type="text" class="form-control span5" name="name" placeholder="Nama">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-3">Telepon *</label>
	<div class="col-sm-9">
		<input type="text" class="form-control span5" name="phone" placeholder="Nomor Telepon">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-3">Organisasi</label>
	<div class="col-sm-9">
		<input type="text" class="form-control span5" name="organisation" placeholder="Organisasi">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-3">Group</label>
	<div class="col-sm-9">
		<?php foreach ($group as $key) {
			?>
			<input type="checkbox" name="group[]" value="<?php echo $key->id;?>"><?php echo $key->group_name;?>
			<?php 		} ?>
		</div>
	</div>
	<div class="text-left">
		<label class="control-label col-sm-3"></label>
		<div class="col-sm-2">
			<input type="submit" class="btn btn-success" value="Tambah"/>
		</div></div>
		<?php echo form_close(); ?>
