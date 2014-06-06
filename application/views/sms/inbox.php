						<table class="table table-striped">
							<thead>
								<th>Pengirim</th>
								<th>Isi</th>
								<th>Tanggal</th>
								<th>Aksi</th>
							</thead>
							<?php
							foreach ($inbox as $row) {
								$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
								$reply = anchor('sms/reply/'.$row->ID,'<span class="glyphicon glyphicon-share"></span>');
								$forward = anchor('sms/forwardInbox/'.$row->ID,'<span class="glyphicon glyphicon-share-alt"></span>');
								$delete = anchor('sms/deleteInbox/'.$row->ID,'<span class="glyphicon glyphicon-trash"></span>', $onclick);
								?>
								<tr>
									<td><?php echo $row->SenderNumber;?></td>
									<td>
										<?php
										$cut = character_limiter(strip_tags($row->TextDecoded),6);
										echo anchor('sms/detailInbox/'.$row->ID, $cut);
										?>
									</td>
									<td><?php echo $row->ReceivingDateTime;//date ("D, d M Y H:i:s",strtotime($row->ReceivingDateTime));?></td>
									<td><?php echo $reply.' '.$forward.' '.$delete;?></td>
								</tr>

								<?php
							}
							?>
						</table>


<div class="text-right"><?php echo $halaman?></div>


		<div class="row">
			<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        <div class="modal-dialog">
	            <div class="modal-content">
 
	                <div class="modal-header">
	                    <a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
	                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
	                </div>
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
		</div>
	
	
	