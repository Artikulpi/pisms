						


<div class="text-right"><?php echo $halaman?></div>

<form class="navbar-form navbar-left" role="search">
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Search">
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>

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
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dalog -->
		</div><!-- /.modal -->

		<div class="span3 well">
			<center>
				<a href="#aboutModal" data-toggle="modal" data-target="#myModal">  <img src="<?php echo base_url();?>media/img/newmassage.png" alt="" name="aboutme" width="140" height="140" class="img-rounded"></a>

				<em>Klik gambar untuk melihat pesan masuk.</em>
			</center>
		</div>
	</div></div>
	
	
	