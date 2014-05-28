<?php
echo validation_errors();
echo form_open('group/add'); ?>

<div class="form-group">
        <label class="control-label col-sm-3">Grup *</label>
        <div class="col-sm-9">
                <input type="text" class="form-control span5" name="group" placeholder="Nama Grup">
        </div>
</div>
<div class="text-center">
        <input type="submit" class="btn btn-success" value="Tambah"/>
</div>
<?php echo form_close(); ?>
