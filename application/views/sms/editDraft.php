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

	<label class="control-label col-sm-2">Isi *</label>
		<div class="col-sm-12 col-md-10">
			<textarea class="form-control" id="karakter" maxlength="160" name="content" rows="3"><?php echo $draft->content;?></textarea><br>
			<div style="width:264px;text-align: center" class="alert alert-danger"><span id="hitung">160</span> Karakter Tersisa.</div>
		</div>

	<label class="control-label col-sm-2"></label>
		<div class="col-sm-12 col-md-6">
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
						Masukan Nomor Telepon
					</a>
				</h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse">
				<div class="col-sm-12">
				<div class="panel-body">
					<input type="text" class="form-control" name="number" />
					<div class="text-left">
						<div class="col-sm-3 col-md-8">
						<input type="hidden" name="draft_id" value="<?php echo $draft->id;?>">
						<input type="submit" name="input_manual" class="btn btn-success" value="Kirim"/>
						<input type="submit" name="draft" class="btn btn-success" value="Simpan ke Draft"/>
					</div>
				</div>
			</div>
		</div></div></div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
						Kontak
					</a>
				</h4>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse">
				<div class="panel-body">
					<?php foreach ($contact as $row) {?>
					<form>
						<label>
							<input name="contact" type="checkbox" value="<?php echo $row->phone_number?>"><?php echo $row->name?>
						</label>
					</form>
					<?php } ?><hr>
					<div class="text-left">
						<div class="col-sm-2 col-md-3">
						<input type="submit" name="input_contact" class="btn btn-success" value="Kirim"/>
					</div>
				</div>
			</div>
		</div></div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
						Grup
					</a>
				</h4>
			</div>
			<div id="collapseThree" class="panel-collapse collapse">
				<div class="panel-body">
					<?php foreach ($group as $row) {?>
					<form>
						<label>
							<input name="group" type="checkbox" value="<?php echo $row->id?>"><?php echo $row->group_name?>
						</label>
					</form>
					<?php } ?><hr>
					<div class="text-left">
						<div class="col-sm-2 col-md-2">
						<input type="submit" name="input_group" class="btn btn-success" value="Kirim"/>
					</div>
				</div>
			</div>
		</div>
	</div></div>
	<?php echo form_close(); ?>