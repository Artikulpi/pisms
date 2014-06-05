<?php
echo validation_errors();
echo form_open('pigroup/add'); ?>

<div class="form-group">
        <label class="control-label col-sm-3">Grup *</label>
        <div class="col-sm-9">
                <input type="text" class="form-control span5" name="group" placeholder="Nama Grup">
        </div>
</div>
<div class="text-left">
	<label class="control-label col-sm-3"></label>
	<div class="col-sm-2">
        <input type="submit" class="btn btn-success" value="Tambah"/>
</div></div>
<?php echo form_close(); ?>
