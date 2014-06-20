<?php
$this->load->view('sms/limiter');
echo validation_errors();
echo form_open('sms/create'); ?>


<div class="col-sm-12 col-sm-offset-12 col-md-10 col-md-offset-1 main">
	<div class="form-group">
		<?php echo validation_errors(); ?>
		<Label>Pesan Anda</Label>
		<textarea id="limit" name="content" class="form-control" maxlength="160" rows="3"></textarea>
	</div>  

	<div class="box">
		<?php
		echo form_open('sms/create');
		?>
	</div>
		
			<input type="text" class="form-control" name="contact" value="<?php echo $contact->phone_number;?>" disabled>
		
	
	<center><div class="panel-footer">
		<input type="submit" name="sendto" class="btn btn-default" value="Kirim">
		<input type="submit" class="btn btn-default" name="draft" value="Simpan ke draf">
	</div>	</center>
</div>
</div>

<?php echo form_close(); ?>