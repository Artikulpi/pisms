<?php echo validation_errors(); echo form_open('contact/saveEdit'); ?>

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

<label class="control-label col-sm-3">Group</label>
<div class="col-sm-9">
	<div class="panel panel-default">
	                <div class="panel-body">
		<?php
		foreach($chg as $x) {
			$new[$x->group_id] = $x->group_id;
		}
		if (!empty($new)) {
			foreach ($group as $key) {
				if (in_array($key->id, $new)) {
					?>
					<input type="checkbox" name="group[]" value="<?php echo $key->id;?>" checked> <?php echo $key->group_name;?>
					<?php
				}else{
					?>
					<input type="checkbox" name="group[]" value="<?php echo $key->id;?>"> <?php echo $key->group_name;?>
					<?php
				}
			}
		}else{
			foreach ($group as $key) {
				?>
				<input type="checkbox" name="group[]" value="<?php echo $key->id;?>"> <?php echo $key->group_name;?>
				<?php
			}
		}
		?>

	</div>
</div>
</div>
<div class="text-left">
	<label class="control-label col-sm-12"></label>
	<div class="col-sm-2">
		<input type="submit" class="btn btn-default" value="Edit"/>
	</div>
</div>
<?php echo form_close(); ?>
