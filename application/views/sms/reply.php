<?php
$this->load->view('sms/limiter');
echo validation_errors();
echo form_open('sms/create'); ?>


<div class="col-sm-12 col-sm-offset-12 col-md-10 col-md-offset-1 main">
			<div class="form-group">
				<label>Isi *</label>
				<textarea class="form-control" id="limit" maxlength="160" name="content" rows="3" placeholder="massage"></textarea>	
			</div>
	
	

	<div class="form-group">
		<label>Nomor Tujuan *</label>
		<input type="text"class="form-control" name="contact" value="<?php echo $sms->SenderNumber;?>" style="max-width:1000px">
	</div>
	<center><div class="panel-footer">
		<input type="submit" name="sendto" class="btn btn-default" value="Kirim"/>
		<input type="submit" class="btn btn-default" name="draft" value="Simpak ke draf">
	</div></center>
</div>
		

<?php echo form_close(); ?>
