<form class="navbar-form navbar-left" role="search">
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Search">
		<button type="submit" class="btn btn-default">Submit</button>
	</div>
	
</form>

							<table class="table table-striped">
								<thead>
									<th>No. Tujuan</th>
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
								<td><span class="label label-success"><?php echo $row->SenderNumber;?></span></td>
							
							
								<td><?php
								$cut = character_limiter(strip_tags($row->TextDecoded),6);
								echo anchor('sms/detailInbox/'.$row->ID, $cut);
								?></td>
							
						
								<td><?php echo $row->ReceivingDateTime;//date ("D, d M Y H:i:s",strtotime($row->ReceivingDateTime));?></td>
							
							
								<td><?php echo $reply.' '.$forward.' '.$delete;?></td>
							</tr>


							<?php
						}
						?>

<div class="text-right"><?php echo $halaman?></div>


