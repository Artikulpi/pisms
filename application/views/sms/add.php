<script type="text/javascript" src="<?php echo base_url();?>media/js/select2.js"></script>
<link href="<?php echo base_url(); ?>media/css/select2.css" rel="stylesheet" type='text/css'>
<script type="text/javascript">
$(document).ready(function() {
	$('#karakter').keyup(function() {
		var len = this.value.length;
		if (len >= 160) {
			this.value = this.value.substring(0, 160);
			
		}else{
			$('#hitung').text(160 - len);

		}

	});
});
</script>
<h3>Multiple Select</h3>
<select id="mySel3" class="select2" multiple="multiple" style="width:400px;">
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
								<div style="width:264px;text-align: center" class="alert alert-warning" ><span id="hitung" >160</span> Karakter Tersisa.</div>  
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label>Kirim Berdasarkan :</label>

								<div class="panel-group" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<label>
													<input type="radio" name="optionsRadios" value="kontak" data-toggle="collapse" data-parent="#accordion"  id="optionsRadios1"  data-target="#wilayah">
													Kontak
												</label>
											</h4>
										</div>
										<div id="wilayah" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="control-group">
													<input type="text" class="form-control" name="fromcontact">
												</div>
											</div>
											<div class="control-group">
												<span>&nbsp;</span>
												
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<label>
													<input type="radio" name="optionsRadios" value="fromgroup" data-toggle="collapse" data-parent="#accordion" id="optionsRadios2" data-target="#partai">
													Group
												</label>
											</h4>
										</div>
										<div id="partai" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="control-group">
													<?php
													if (!empty($group)) {
														foreach ($group as $row):
															?>
														<input type="checkbox" value="<?php echo $row->id; ?>" name="groupcheck[]"> <?php echo $row->group_name; ?>
														<?php
														endforeach;
													}
													?>
												</div>
											</div>
										</div>
									</div>

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

													<div class="control-group">
														<input  type="text" maxlength="12" class="form-control" name="no_tujuan" placeholder="No.Telp Tujuan">
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
					<div class="col-md-12">
						<input type="submit" class="btn btn-info" value="Kirim">
					</div>
				</div>
			</form>
		</div> </div>

		<?php
		form_close();
		?>