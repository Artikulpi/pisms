<?php
echo validation_errors();
echo form_open('contactgroup/add'); ?>

<div class="form-group">
        <label class="control-label col-sm-3">Nama *</label>
        <div class="col-sm-9">
                <select class="form-control" name="contact">
                        <?php foreach ($contact as $row) {
                                ?>
                                <option value="<?php echo $row->id?>"><?php echo $row->name?></option>
                                <?php
                        } 
                        ?>
                </select><br>
        </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-3">Group *</label>
        <div class="col-sm-9">
                <select class="form-control" name="group">
                        <?php foreach ($group as $row) {
                                ?>
                                <option value="<?php echo $row->id?>"><?php echo $row->group_name?></option>
                                <?php
                        } 
                        ?>
                </select><br>
        </div>
</div>

<div class="text-left">
	<label class="control-label col-sm-3"></label>
	<div class="col-sm-2">
        <input type="submit" class="btn btn-success" value="Tambah"/>
</div></div>
<?php echo form_close(); ?>
