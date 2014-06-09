						


<div class="text-right"><?php echo $halaman?></div>


			<div class="row">
				<div class="col-sm-12 col-md-12">
				<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		        <div class="modal-dialog">
		            <div class="modal-content">
 
		                <div class="modal-header">
		                    <a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
		                    <h4 class="modal-title" id="myModalLabel">Kotak masuk</h4>
		                </div><hr>
		                <div class="modal-body">
						
							<?php
							foreach ($inbox as $row) {
								$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
								$reply = anchor('sms/reply/'.$row->ID,'<span class="glyphicon glyphicon-share"></span>');
								$forward = anchor('sms/forwardInbox/'.$row->ID,'<span class="glyphicon glyphicon-share-alt"></span>');
								$delete = anchor('sms/deleteInbox/'.$row->ID,'<span class="glyphicon glyphicon-trash"></span>', $onclick);
								?>
								<div class="col-sm-12 col-md-3">
								<span class="label label-success"><?php echo $row->SenderNumber;?></span>
								</div>
								<div class="col-sm-12 col-md-3">
										<?php
										$cut = character_limiter(strip_tags($row->TextDecoded),6);
										echo anchor('sms/detailInbox/'.$row->ID, $cut);
										?>
								</div>
								<div class="col-sm-12 col-md-4">
									<?php echo $row->ReceivingDateTime;//date ("D, d M Y H:i:s",strtotime($row->ReceivingDateTime));?>
								</div>
								<div class="col-sm-12 col-md-2">
									<?php echo $reply.' '.$forward.' '.$delete;?>
								</div>
								

								<?php
							}
							?>
						
		                </div>
		                <hr>
 
		            </div><!-- /.modal-content -->
		        </div><!-- /.modal-dalog -->
		</div><!-- /.modal -->
    
		<a data-toggle="modal" href="#myModal" class="label label-success"><img src="<?php echo base_url();?>media/img/newmassage.png" class="img-rounded" width="70"> Lihat pesan masuk</a>
			</div></div>
	
	
	