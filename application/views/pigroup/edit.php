<?php
echo validation_errors();
echo form_open('pigroup/saveEdit'); ?>

<input type="hidden" name="id" value="<?php echo $group->id?>">
<div class="form-group">
	<label class="control-label col-sm-3">Grup *</label>
	<div class="col-sm-9">
		<input type="text" class="form-control span5" name="group" value="<?php echo $group->group_name?>">
	</div>
</div>
<div class="text-left">
	<label class="control-label col-sm-3"></label>
	<div class="col-sm-2">
	<input type="submit" class="btn btn-success" value="Edit"/>
</div></div>
<?php echo form_close(); ?>
