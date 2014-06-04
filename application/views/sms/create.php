<?php
echo validation_errors();
echo form_open('sms/create'); ?>

<div class="form-group">
	<label class="control-label col-sm-3">Isi *</label>
	<div class="col-sm-9">
		<textarea class="form-control" name="content" rows="3" style="max-width:300px"></textarea>
	</div>
</div>

<br/>
<br/>
<div id='buttons'>
	<label><input type="radio" name="select" /> Masukan nomor tujuan </label>
	<label><input type="radio" name="select" /> Kirim dari kontak</label>
	<label><input type="radio" name="select" /> Kirim ke grup</label>
</div>
<div id="content">
	<div id="input_manual" style="display: none;">
		<label>
			<input type="text" name="number" />
			<div class="text-center">
				<input type="submit" name="input_manual" class="btn btn-success" value="Kirim"/>
			</div>
		</label>
	</div>
</div>
<div id="from_contact" style="display: none;">
	<label> 
		<input type="text" class="autocomplete" name="contact" />
		<div class="text-center">
			<input type="submit" name="from_contact" class="btn btn-success" value="Kirim"/>
			<script type='text/javascript'>
			var site = '<?php echo site_url();?>';
			$(function(){
				$('.autocomplete').autocomplete({
					serviceUrl: site+'/sms/search',
					onSelect: function (suggestion) {
						alert('You selected: ' + suggestion.value + ', ' + suggestion.phone);
					}
				});   
			});
			</script>
		</div>
	</label>
</div>
<div id="send_grup" style="display: none;">
	<label>
		<input type="text" class="form-control" name="group" />
		<div class="text-center">
			<input type="submit" name="to_group" class="btn btn-success" value="Kirim"/>
		</div>
	</label>
</div>
<script type="text/javascript">
$("[name=select]").change(function(){
	$("#input_manual").toggle($("[name=select]").index(this)===0);
});
</script>
<script type="text/javascript">
$("[name=select]").change(function(){
	$("#from_contact").toggle($("[name=select]").index(this)===1);
});
</script>
<script type="text/javascript">
$("[name=select]").change(function(){
	$("#send_grup").toggle($("[name=select]").index(this)===2);
});
</script>
<br/>
<br/>
<?php echo form_close(); ?>