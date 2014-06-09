
			<div class="row">
				<div class="col-sm-12 col-md-12">
				<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		        <div class="modal-dialog">
		            <div class="modal-content">
 
		                <div class="modal-header">
		                    <a class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
		                    <h4 class="modal-title" id="myModalLabel">Pesan Terkirim</h4>
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
								foreach ($sentitem as $row) { ?>
								<tr>
									<td><?php echo $row->DestinationNumber;?></td>
									<td><?php echo $row->TextDecode;?></td>
									<td><?php echo $row->SendingDateTime;//date ("D, d M Y H:i:s",strtotime($row->SendingDateTime));?></td>
									<td><?php echo '-';?></td>
								</tr>

								<?php
							}
							?>
							</table>
		                </div>
		                <hr>
 
		            </div><!-- /.modal-content -->
		        </div><!-- /.modal-dalog -->
		</div><!-- /.modal -->
    
		<a data-toggle="modal" href="#myModal" class="label label-success"><img src="<?php echo base_url();?>media/img/plane.png" class="img-rounded" width="70"> Lihat pesan terkirim</a>
			</div></div>
	
<div class="text-right"><?php echo $halaman?></div>

