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
						<div class="col-sm-12 col-md-6">
						<div class="row">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<label>
										<input type="radio" name="optionsRadios" value="frominput" data-toggle="collapse" data-parent="#accordion" id="optionsRadios3" data-target="#phone">
										Menggunakan No. Telp
									</label>
								</h4>
							</div>
							<div id="phone" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="control-group">
										<input type="text" class="form-control" name="contact" value="<?php echo $contact->phone_number;?>" disabled="disabled">
										</div>
										<div class="control-group">
											<span>&nbsp;</span>
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
				</div>
					<div class="col-md-12">
						<input type="submit" class="btn btn-default" value="Kirim">
					</div>
			</form>
		</div></div></div>
		
<?php echo form_close(); ?>