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

	
	        <div class="col-md-12">
	                <form>
	                <div class="row">
	                    <div class="col-sm-12 col-md-12">
	                        <div class="form-group">
					          <?php echo validation_errors(); ?>
					          <Label>Isi *</Label>
					  		<textarea class="form-control" id="karakter" maxlength="160" name="content" rows="3"><?php echo $sms->TextDecoded;?></textarea><br>
					  		<div style="width:264px;text-align: center" class="alert alert-warning"><span id="hitung">160</span> Karakter Tersisa.
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
	                    </div>
	                  <label class="col-sm-12">Kirim Berdasarkan :</label>
	                        <div class="form-group">
							<div class="col-sm-12 col-md-6">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<label>
											<input type="radio" name="optionsRadios" value="kontak" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" data-parent="#accordion"  id="optionsRadios1">
											Kontak
										</lebel>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="control-group">
										<input type="text" class="form-control" name="fromcontact">
									</div>
								</div>
							</div>
						</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<label>
											<input type="radio" name="optionsRadios" value="grup" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											Grup
										</lebel>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="control-group">
										<?php foreach ($group as $row) {?>
											<label>
												<input name="group" type="checkbox" value="<?php echo $row->id?>"><?php echo $row->group_name?>
											</label>
										
										<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<label>
											<input type="radio" name="optionsRadios" value="kontak" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" data-parent="#accordion"  id="optionsRadios1">
											Menggunakan No. Telp
										</label>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										<input type="text" class="form-control" name="number" />
									</div>
								</div>
							</div>
						</div>
	                </div>
					<div class="col-sm-12">
						<input type="submit" name="input_manual" class="btn btn-default" value="Kirim"/>
					</div>
	                </form>
	            </div>
</div>

	
<?php echo form_close(); ?>