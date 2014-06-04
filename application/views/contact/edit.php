<?php
echo validation_errors();
echo form_open('contact/saveEdit'); ?>

<input type="hidden" name="id" value="<?=$contact->id?>">
<div class="form-group">
	<label class="control-label col-sm-3">Nama *</label>
	<div class="col-sm-9">
		<input type="text" class="form-control span5" name="name" value="<?=$contact->name?>">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-3">Telepon *</label>
	<div class="col-sm-9">
		<input type="text" class="form-control span5" name="phone" value="<?=$contact->phone_number?>">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-3">Organisasi</label>
	<div class="col-sm-9">
		<input type="text" class="form-control span5" name="organisation" value="<?=$contact->organisation?>">
	</div>
</div>
<div class="text-center">
	<input type="submit" class="btn btn-success" value="Edit"/>
</div>
<?php echo form_close(); ?>
