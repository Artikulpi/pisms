<?php
echo validation_errors();
echo form_open('sms/create'); ?>

<div class="form-group">
	<label class="control-label col-sm-3">Isi *</label>
	<div class="col-sm-9">
		<textarea class="form-control" name="content" rows="3" style="max-width:300px"><?php echo $sms->TextDecoded;?></textarea>
	</div>
</div>


<br>
<br>

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
			<div class="panel-body">
				<input type="text" class="form-control" name="number" />
				<div class="text-center">
					<input type="submit" name="input_manual" class="btn btn-success" value="Kirim"/>
				</div>
			</div>
		</div>
	</div>
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
				<div class="checkbox">
					<label>
						<input name="contact" type="checkbox" value="<?php echo $row->phone_number?>"><?php echo $row->name?>
					</label>
				</div>
				<?php } ?>
				<div class="text-center">
					<input type="submit" name="input_contact" class="btn btn-success" value="Kirim"/>
				</div>
			</div>
		</div>
	</div>
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
				<div class="checkbox">
					<label>
						<input name="group" type="checkbox" value="<?php echo $row->id?>"><?php echo $row->group_name?>
					</label>
				</div>
				<?php } ?>
				<div class="text-center">
					<input type="submit" name="input_group" class="btn btn-success" value="Kirim"/>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>