<?php
echo validation_errors();
echo form_open('user/saveReset'); ?>
<input type="hidden" value="<?php echo $user->id?>" name="id">
<div class="form-group">
	<label class="control-label col-sm-3">Password Baru *</label>
	<div class="col-sm-9">
		<input type="password" class="form-control span5" name="pass" placeholder="Password">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-3">Konfirmasi Password Baru *</label>
	<div class="col-sm-9">
		<input type="password" class="form-control span5" name="passconf" placeholder="Konfirmasi Password">
	</div>
</div>
<div class="text-left">
	<label class="control-label col-sm-3"></label>
	<div class="col-sm-2">
	<input type="submit" class="btn btn-success" value="Ubah"/>
</div></div>
<?php echo form_close(); ?>


		<div class="row">
			<div class="col-sm-12 col-sm-12">
			<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        <div class="modal-dialog">
	            <div class="modal-content">
 
	                <div class="modal-header">
	                    <a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
	                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
	                </div><hr>
	                <div class="modal-body">
						
	                </div>
	                <div class="modal-footer">
	                    <div class="btn-group">
	                    <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
	                    <button class="btn btn-primary">Save changes</button>
	                </div>
	                </div>
 
	            </div><!-- /.modal-content -->
	        </div><!-- /.modal-dalog -->
	</div><!-- /.modal -->
    
	<a data-toggle="modal" href="#myModal">Launch demo modal</a>
		</div></div>
		
		
		
		