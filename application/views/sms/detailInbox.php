<div class="row">
				<div class="col-sm-12 col-md-12">
				<div id="test" class="modal fade in" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		        <div class="modal-dialog">
		            <div class="modal-content">
 
		                <div class="modal-header">
		                    <a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
		                    <h4 class="modal-title" id="myModalLabel">Detail Pesan</h4>
		                </div>
		                <div class="modal-body">
				<form class="form-horizontal" method="post" action="<?php echo site_url('sms/inbox')?>">
					<div class="col-sm-12 col-md-6">
					<span class="label label-success">Pengirim</span> <?php echo $sms->SenderNumber;?>
					</div>
					<div class="col-sm-12 col-md-6">
					<div class="text-right">
						<a href="<?php echo site_url('sms/reply/'.$sms->ID)?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-share"></span></a>
						<a href="<?php echo site_url('sms/forwardInbox/'.$sms->ID)?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-share-alt"></span></a>
						<a href="<?php echo site_url('sms/deleteInbox/'.$sms->ID)?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');"><span class="glyphicon glyphicon-trash"><span></a>
					</div>
		                </div>
					<div class="col-sm-12 col-md-12">
					<span class="label label-success">Tanggal</span> <?php echo $sms->ReceivingDateTime;?>
					</div><br><hr>
					<div class="col-sm-12 col-md-12">
					<span class="label label-info">Isi</span>
					<div class="well well-sm">
					<?php echo $sms->TextDecoded;?>
					</div></div>
				</form>
		                <div class="modal-footer">
		                    
		                </div>
 					   </div>
		            </div><!-- /.modal-content -->
		        </div><!-- /.modal-dalog -->
		</div><!-- /.modal -->
    
	
	
	
	   
			</div></div>
	