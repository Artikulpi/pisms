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

	<div class="container-fluid">
	    <div class="row">
	        <div class="col-md-12">
	                <form>
	                <div class="row">
	                    <div class="col-sm-12 col-md-12">
	                        <div class="form-group">
								<label>Isi *</label>
					  		<textarea class="form-control" id="karakter" maxlength="160" name="content" rows="3" placeholder="massage"></textarea><br>
					  		<div style="width:264px;text-align: center" class="alert alert-warning"><span id="hitung">160</span> Karakter Tersisa.</div>
	                        </div>
	                    </div>
	                    <div class="col-sm-12 col-md-6">
	                        <div class="form-group">
							 	<label>Nomor Tujuan *</label>
							 	
							 		<input type="text"class="form-control" name="contact" value="<?php echo $sms->SenderNumber;?>" style="max-width:1000px">
			                    <div class="col-md-12">
			                        <input type="submit" class="btn btn-success" value="Kirim"/>
			                    </div>
							                  </div>
							              </div>
							          </div>
							      </div>
							  </div>
							  </div>
	                        </div>
	                    </div>
	                    
	                </div>
	                </form>
	            </div>

<?php echo form_close(); ?>
