<?php
echo validation_errors();
echo form_open('contact/saveEdit'); ?>

<input type="hidden" name="id" value="<?php echo $contact->id?>">
<div class="form-group">
	<label class="control-label col-sm-3">Nama *</label>
	<div class="col-sm-9">
		<input type="text" class="form-control span5" name="name" value="<?php echo $contact->name?>">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-3">Telepon *</label>
	<div class="col-sm-9">
		<input type="text" class="form-control span5" name="phone" value="<?php echo $contact->phone_number?>">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-3">Organisasi</label>
	<div class="col-sm-9">
		<input type="text" class="form-control span5" name="organisation" value="<?php echo $contact->organisation?>">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-3">Group</label>
	<div class="col-sm-3">
		<form>
		<?php foreach ($group as $key) {
			foreach ($chg as $val) {
				if ($val->group_id == $key->id) {
					$checked = 'checked';
				}else{
					$checked = NULL;
				}
			}
			?>
			<input type="checkbox" name="group[]" value="<?php echo $key->id;?>" <?php echo $checked;?>><?php echo $key->group_name;?>
			<?php		} ?>
		</form>
		</div>
	</div>
	<div class="text-left">
		<label class="control-label col-sm-12"></label>
		<div class="col-sm-2">
			<input type="submit" class="btn btn-info" value="Edit"/>
		</div></div>
		<?php echo form_close(); ?>
