<?php
echo validation_errors();
echo form_open('group/saveEdit'); ?>

<input type="hidden" name="id" value="<?=$group->id?>">
<div class="form-group">
	<label class="control-label col-sm-3">Grup *</label>
	<div class="col-sm-9">
		<input type="text" class="form-control span5" name="group" value="<?=$group->group_name?>">
	</div>
</div>
<div class="text-center">
	<input type="submit" class="btn btn-success" value="Edit"/>
</div>
<?php echo form_close(); ?>
