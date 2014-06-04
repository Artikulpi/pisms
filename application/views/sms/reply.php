<?php
echo validation_errors();
echo form_open('sms/create'); ?>

<div class="form-group">
	<label class="control-label col-sm-3">Isi *</label>
	<div class="col-sm-9">
		<textarea class="form-control" name="content" rows="3" style="max-width:300px"></textarea>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3">Nomor Tujuan *</label>
	<div class="col-sm-9">
		<input type="text"class="form-control" name="contact" value="<?=$sms->SenderNumber;?>" style="max-width:300px">
	</div>
</div>

<div class="text-center">
	<input type="submit" class="btn btn-success" value="Kirim"/>
</div>
<?php echo form_close(); ?>
