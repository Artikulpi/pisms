<?php
echo validation_errors();
echo form_open('contactgroup/saveEdit'); ?>

<input name="id" value="<?=$contactgroup->id?>" type="hidden">
<div class="form-group">
        <label class="control-label col-sm-3">Nama *</label>
        <div class="col-sm-9">
                <select class="form-control" name="contact">
                        <?php foreach ($contact as $row) {
                                $selected = ($row->id == $contactgroup->contact_id) ? 'selected' : NULL ;
                                ?>
                                <option value="<?=$row->id?>" <?=$selected?>><?=$row->name?></option>
                                <?php
                        } 
                        ?>
                </select>
        </div>
</div>
<div class="form-group">
        <label class="control-label col-sm-3">Group *</label>
        <div class="col-sm-9">
                <select class="form-control" name="group">
                        <?php foreach ($group as $row) {
                                $selected = ($row->id == $contactgroup->group_id) ? 'selected' : NULL ;
                                ?>
                                <option value="<?=$row->id?>" <?=$selected?>><?=$row->group_name?></option>
                                <?php
                        } 
                        ?>
                </select>
        </div>
</div>

<div class="text-center">
        <input type="submit" class="btn btn-success" value="Edit"/>
</div>
<?php echo form_close(); ?>
