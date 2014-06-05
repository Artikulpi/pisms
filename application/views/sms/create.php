
<?php
echo validation_errors();
echo form_open('sms/create'); ?>

<label class="col-md-3 control-label" for="name">Isi *</label>
	<div class="col-md-12">
		<textarea class="form-control" name="content" rows="4" placeholder="Message"></textarea><br>
	</div>

<div class="col-sm-12 col-md-12">
<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
					Masukan Nomor Telepon
				</a>
			</h4>
		</div>
		<div id="collapseOne" class="panel-collapse collapse"><br>
			<label class="control-label col-sm-3">Telepon *</label>
			<div class="col-sm-9">
			<div class="panel-body">
				<input type="text" class="form-control" name="number" placeholder="Nomor telepon"/>
				<div class="text-left">
					<div class="col-sm-2 col-md-2">
					<input type="submit" name="input_manual" class="btn btn-success" value="Kirim"/>
				</div>
				</div>
			</div>
		</div>
	</div></div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
					Kontak
				</a>
			</h4>
		</div>
		
		<div id="collapseTwo" class="panel-collapse collapse">
			<br><label class="control-label col-sm-3">Kontak *</label>
			<div class="col-sm-9">
			<div class="panel-body">
				
					<?php foreach ($contact as $row) {?>
					<div class="checkbox">
						<label>
							<input name="contact" type="checkbox" value="<?=$row->phone_number?>"><?=$row->name?>
						</label>
					</div>
					<?php } ?>
					<div class="text-left">
						<div class="col-sm-2 col-md-3">
						<input type="submit" name="input_contact" class="btn btn-success" value="Kirim"/>
					</div>
				</div>
			</div></div>
			<div class="panel-body">
				
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
			<br><label class="control-label col-sm-3">Grup *</label>
			<div class="col-sm-9">
			<div class="panel-body">
				<?php foreach ($group as $row) {?>
				<div class="checkbox">
					<label>
						<input name="group" type="checkbox" value="<?=$row->id?>"><?=$row->group_name?>
					</label>
				</div>
				<?php } ?>
				<div class="text-left">
					<div class="col-sm-2 col-md-3">
					<input type="submit" name="input_group" class="btn btn-success" value="Kirim"/>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php echo form_close(); ?>