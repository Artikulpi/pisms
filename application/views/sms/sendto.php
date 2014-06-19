<?php
$this->load->view('sms/limiter');
echo validation_errors();
echo form_open('sms/create'); ?>


<div class="col-sm-12 col-md-12">
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
			<div class="row">
			<div class="col-sm-12 col-md-5">
				<input type="text" class="form-control" name="contact" value="<?php echo $contact->phone_number;?>">
			</div>
		</div>
		<div class="panel-footer">
			<input type="submit" name="sendto" class="btn btn-default" value="Kirim">
		</div>	
		</div>
	</div>

<?php echo form_close(); ?>