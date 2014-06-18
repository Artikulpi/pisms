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

	
		<div class="row">
			<div class="col-md-12">

				<form>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="form-group">
								<?php echo validation_errors(); ?>
								<Label>Pesan Anda</Label>
								<textarea id="karakter" name="content"  class="form-control" maxlength="160" rows="5"></textarea><br>
								<div style="width:264px;text-align: center" class="alert alert-warning" ><span id="hitung" >160</span> Karakter Tersisa.
								</div>  
								<strong><h5>Multiple Select</h5></strong>
								<select id="mySel3" class="form-control" multiple="multiple" style="width:400px;">
									<optgroup label="Select multiple">
										<option>One</option>
										<option>Two</option>
										<option>Three</option>
										<option>Siz</option>
										<option>Seven</option>
										<option>Nine</option>
									</optgroup>
									<optgroup label="Select one" class="single">
										<option>Four</option>
										<option>Five</option>
										<option>Six</option>
									</optgroup>
								</select>
								<script type="text/javascript">
								function(){

									$("#mySel").select2({
										allowClear:true
									});

									$("#mySel2").select2({
										closeOnSelect:false
									});

									$("#mySel3").select2({
										closeOnSelect:false
									});

									$('.single option').click(function() {
								    // only affects options contained within the same optgroup
								    // and doesn't include this
								    $(this).siblings().prop('selected', false);
								});
								});

								</script>

								<div class="box">
									<?php
									echo form_open('sms/create');
									?>
								</div>
						</div>
				
					<div class="row">
						<div class="col-sm-12 col-md-5">
								
								
										<input type="text" class="form-control" name="contact" value="<?php echo $contact->phone_number;?>" disabled="disabled">
							
						</div>
					</div>
				</form>
				
					
						<div class="panel-footer">
						<input type="submit" class="btn btn-default" value="Kirim">
					</div>
						
		</div></div>
		
<?php echo form_close(); ?>