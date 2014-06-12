<script type="text/javascript">
$(document).ready(function() {
	$('#karakter').keyup(function() {
		var len = this.value.length;
		if (len >= 160) {
			this.value = this.value.substring(0, 160);
		}
		$('#hitung').text(160 - len);
	});
});
</script>

<?php
echo validation_errors();
echo form_open('sms/create'); ?>

<div class="form-group">
	<label class="control-label col-sm-3">Isi *</label>
	<div class="col-sm-9">
		<textarea class="form-control" id="karakter" maxlength="160" name="content" rows="3"></textarea><br>
		<div style="width:264px;text-align: center" class="alert alert-danger"><span id="hitung">160</span> Karakter Tersisa.</div>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-3">Nomor Tujuan *</label>
	<div class="col-sm-9">
		<input type="text"class="form-control" name="contact" value="<?php echo $contact->phone_number;?>" style="max-width:1000px">
	</div>
</div>

		<label class="control-label col-sm-3"></label>
		<div class="col-sm-2">
	<input type="submit" class="btn btn-success" value="Kirim"/>
</div></div>
<?php echo form_close(); ?>