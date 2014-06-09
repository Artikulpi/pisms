
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
						
							<table class="table table-striped">
								<thead>
									<th>No. Tujuan</th>
									<th>Isi</th>
									<th>Tanggal</th>
									<th>Aksi</th>
								</thead>
								<?php
								foreach ($outbox as $row) { ?>
								<tr>
									<td><?php echo $row->DestinationNumber;?></td>
									<td><?php echo $row->TextDecoded;?></td>
									<td><?php echo $row->SendingDateTime;//date ("D, d M Y H:i:s",strtotime($row->SendingDateTime));?></td>
									<td><?php echo '-';?></td>
								</tr>

								<?php
							}
							?>
							</table>
						
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
	        <a href="#aboutModal" data-toggle="modal" data-target="#myModal">  <img src="<?php echo base_url();?>media/img/senditem.png" alt="" name="aboutme" width="140" height="140" class="img-rounded"></a>
	        
	        <em>Klik gambar utuk melihat pesan keluar.</em>
			</center>
	    </div>
			</div></div>
	
	
	