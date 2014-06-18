<script type="text/javascript" src="<?php echo base_url();?>media/js/select2.js"></script>
<link href="<?php echo base_url(); ?>media/css/select2.css" rel="stylesheet" type='text/css'>
<!--script type="text/javascript">
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
</script-->

<?php $this->load->view('sms/limiter') ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form>
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="form-group">
							<?php echo validation_errors(); ?>
							<Label>Pesan Anda</Label>
							<script type="text/javascript">
							jQuery.fn.limitCharacters = function(options){
								if (this.length == 0) return;

								var settings = {
									charLimit : 160,
									showRemaining : true,
									remainingClass : 'remainingChars alert',
									remainingWarnClass: 'remainingCharsWarn',
								};

								if (options){
									$.extend(settings, options);
								}

								this.after("<span id='CharsLeft' style='margin-left:10px'></span>");

								this.bind("change keyup focus input propertychange", function(event){
									var len = $(this).val().length;
									if(len > settings.charLimit){
										this.value = this.value.substring(0, settings.charLimit);
									}


									var charsLeft = settings.charLimit - len;
									if(charsLeft < 0){
										charsLeft = 0;
									}

									$('#CharsLeft').text(charsLeft + " Karakter lagi");
									if((settings.charLimit - len) > 10){
										if(!$('#CharsLeft').hasClass(settings.remainingClass)){
											$('#CharsLeft').addClass(settings.remainingClass);
										}
										if($('#CharsLeft').hasClass(settings.remainingWarnClass)){
											$('#CharsLeft').removeClass(settings.remainingWarnClass);
										}
									}else{
										if(!$('#CharsLeft').hasClass(settings.remainingWarnClass)){
											$('#CharsLeft').addClass(settings.remainingWarnClass);
										}
									}
									return this;
								});
							}
							</script>

							<textarea id="limitCharacters" name="content" class="form-control" maxlength="160" rows="5"></textarea><br>
							<div style="width:264px;text-align: center" class="alert alert-warning" ><span id="CharsLeft" >160</span> Karakter Tersisa.
							</div>  
							<div class="box">
								<?php
								echo form_open('sms/create');
								?>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div class="row">
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
													<?php
													if (!empty($group)) {
														foreach ($group as $row):
															?>
														<div class="col-sm-4">
															<input type="checkbox" value="<?php echo $row->id; ?>" name="groupcheck[]"> <?php echo $row->group_name; ?></div>
															<?php
															endforeach;
														}
														?>
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
						</div>
						<div class="col-md-12">
							<input type="submit" class="btn btn-default" value="Kirim">
						</div>
					</form>
				</div></div></div>

				<?php
				form_close();
				?>