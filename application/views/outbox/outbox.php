
	<?php
	foreach ($outbox as $row) { 
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$delete = anchor('outbox/delete/'.$row->ID,'<span class="btn btn-xs btn-success"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></span></span>', $onclick);
		?>
		

				<div class="row">
				</div>
				<div class="message-item" id="m1">
					<div class="message-inner">
						<div class="message-head clearfix">
							<div class="avatar pull-left">
								<a href="./index.php?qa=user&qa_1=admin"><img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"></a>
							</div>
							<div class="user-detail">
							<h5 class="handle"><?php echo $row->DestinationNumber;?></h5>
									<div class="post-meta">
										<div class="asker-meta">
											<span class="qa-message-what"></span>
												<span class="qa-message-when">
													<span class="qa-message-when-data"><span class="glyphicon glyphicon-time"></span> <?php echo $row->SendingDateTime;//date ("D, d M Y H:i:s",strtotime($row->SendingDateTime));?></span>
														</span>
														<span class="qa-message-who">
													
														<span class="qa-message-who-data"><a href="./index.php?qa=user&qa_1=admin"></a></span>
														</span>
														</div>
														</div>
														</div>
														</div>
							<div class="qa-message-content"><?php echo $row->TextDecoded;?>
							</div>
							<small class="pull-right"><?php echo $delete.' hapus';?></small><br>
											</div>
											</div>
				
					<?php } ?>
<div class="text-right"><?php echo $halaman?></div>

