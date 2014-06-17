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
							<textarea class="form-control" id="karakter" maxlength="160" name="content" rows="3"><?php echo $draft->content;?></textarea><br>
							<div style="width:264px;text-align: center" class="alert alert-warning"><span id="hitung">160</span> Karakter Tersisa.</div>
	                        </div>
	                    </div>
						<label class="control-label col-sm-12">Kirim Berdasarkan :</label>
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
									
									<div class="panel-body">
										<input type="text" class="form-control" name="number" />
										<div class="text-left">
											<div class="col-sm-3 col-md-8">
											<input type="hidden" name="draft_id" value="<?php echo $draft->id;?>">
											<input type="submit" name="input_manual" class="btn btn-default" value="Kirim"/>
											<input type="submit" name="draft" class="btn btn-default" value="Simpan ke Draft"/>
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
									<div class="panel-body">
										<div class="control-group">
										<?php foreach ($contact as $row) {?>
										
											<label>
											<input name="contact" type="checkbox" value="<?php echo $row->phone_number?>"><?php echo $row->name?>
											</label>
										
										<?php } ?></div><hr>
										<div class="text-left">
											<div class="col-sm-2 col-md-3">
											<input type="submit" name="input_contact" class="btn btn-default" value="Kirim"/>
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
										
											<div class="col-sm-4">
												<input name="group" type="checkbox" value="<?php echo $row->id?>"> <?php echo $row->group_name?>
											</div>
										
										<?php } ?></div>
										<div class="text-left">
											<div class="col-sm-2 col-md-2">
											<span data-toggle="tooltip" data-placement="bottom" title="kirim"><input type="submit" name="input_group" class="btn btn-default" value="Kirim"><hr>
										</div>
									</div>
								</div>
							</div>
						</div></div>
	                </form>
	            </div></div></div></div>
	
	<?php echo form_close(); ?>