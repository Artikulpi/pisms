<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/jquery.tagsinput.css" />
<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.tagsinput.js"></script>

<?php $this->load->view('sms/limiter')?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo validation_errors(); ?>
						<Label>Pesan Anda</Label>
						<?php
						echo form_open('sms/create');
						?>

						<textarea id="limit" name="content" class="form-control" maxlength="160" rows="3"></textarea><br>
						<div class="box">

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
													<input id="contact" type="text" class="tags" name="fromcontact" value="" />
													<p class="text-right"><em>Gunakan tanda koma (,) sebagai pemisah</em></p>
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
															<input id="no_tujuan" type="text" class="tags" name="no_tujuan" value=""/>
															<p class="text-right"><em>Gunakan tanda koma (,) sebagai pemisah</em></p>
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
				</div>
			</div>
		</div>

		<?php
		form_close();
		?>