<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/jquery.tagsinput.css" />
<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.tagsinput.js"></script>
<script src="<?php echo base_url();?>media/js/chosen.jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>media/js/prism.js" type="text/javascript" charset="utf-8"></script>
<!--link rel="stylesheet" href="<?php echo base_url();?>media/css/style_ac.css"-->
<link rel="stylesheet" href="<?php echo base_url();?>media/css/prism.css">
<link rel="stylesheet" href="<?php echo base_url();?>media/css/chosen.css">
<?php $this->load->view('sms/limiter')?>
<?php
echo validation_errors();
echo form_open('sms/create'); ?>
<?php $this->load->view('sms/autocomplete')?>

<div class="col-sm-12 col-sm-offset-12 col-md-10 col-md-offset-1 main">
	<div class="form-group">
		<?php echo validation_errors(); ?>
		<Label>Isi *</Label>
		<textarea class="form-control" id="limit" maxlength="160" name="content" rows="3"><?php echo $sms->TextDecoded;?></textarea>
		<div class="box">
			<?php
			echo form_open('sms/create');
			?>
		</div>
	</div>

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
					<input id="kontak" size="50" class="form-control" name="fromcontact">
				</div>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<label>
					<input type="radio" name="optionsRadios" value="fromgroup" data-toggle="collapse" data-parent="#accordion" id="optionsRadios2" data-target="#partai">
					Grup
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
						<input type="checkbox" value="<?php echo $row->id; ?>" name="groupcheck[]"> <?php echo $row->group_name; ?>
					</div>
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
<center>
	<div class="col-md-12">
	<div class="panel-footer">
		<input type="submit" class="btn btn-default" value="Kirim">
		<input type="submit" class="btn btn-default" name="draft" value="Simpan ke draf">
	</div></div></center>

<?php echo form_close(); ?>