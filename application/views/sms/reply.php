<?php
$this->load->view('sms/limiter');
echo validation_errors();
echo form_open('sms/create'); ?>



		<div class="col-sm-12 col-md-12">
			<div class="form-group">
				<label>Isi *</label>
				<textarea class="form-control" id="limit" maxlength="160" name="content" rows="3" placeholder="massage"></textarea>	
			</div>
		</div>
	
<div class="col-sm-12 col-md-5">
	<div class="form-group">
		<label>Nomor Tujuan *</label>
		<input type="text"class="form-control" name="contact" value="<?php echo $sms->SenderNumber;?>" style="max-width:1000px">
	</div>
</div>
<div class="col-sm-12 col-md-12">
	<div class="panel-footer">
		<input type="submit" name="sendto" class="btn btn-default" value="Kirim"/>
	</div>
</div>


<?php echo form_close(); ?>
