<?php echo validation_errors(); echo form_open('contact/add'); ?>

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
<div class="form-group">
	<label class="control-label col-sm-3">Group</label>
	<div class="col-sm-9">
		<div class="panel panel-default">
		                <div class="panel-body">
	<form>
		<?php foreach ($group as $key) {
			?>
			<label>
			<input type="checkbox" name="group[]" value="<?php echo $key->id;?>"> <?php echo $key->group_name;?>
		</label>
			<?php 		} ?>
	</form>
	</div></div></div>
</div>
	<div class="text-left">
		<label class="control-label col-sm-12"></label>
		<div class="col-sm-2">
			<span data-toggle="tooltip" data-placement="bottom" title="Tambah kontak"><input type="submit" class="btn btn-default" value="Tambah"/></span>
		</div>
	</div>
		<?php echo form_close(); ?>
