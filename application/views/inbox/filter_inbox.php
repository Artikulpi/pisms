<div class="row">
				<div class="col-sm-12">
			<p class="bg-info"> Ditemukan <strong><?php echo $jumlah;?></strong> hasil pencarian dengan kata kunci	 <strong><em><?php echo $search;?></p><br>


		<?php
		foreach ($inbox as $row) {
			$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
			$reply = anchor('sms/reply/'.$row->ID,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-share" data-toggle="tooltip" data-placement="bottom" title="Replay"> replay</span></span>');
			$forward = anchor('inbox/forward/'.$row->ID,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-share-alt" data-toggle="tooltip" data-placement="bottom" title="Forward"> forward</span></span>');
			$delete = anchor('inbox/delete/'.$row->ID,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"> hapus</span></span>', $onclick);
			?>

							
								<div class="row">
								</div>
								<div class="message-item" id="m1">
									<div class="message-inner">
										<div class="message-head clearfix">
											<div class="avatar pull-left"><a href="./index.php?qa=user&qa_1=admin"><img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"></a>
											</div>
											<div class="user-detail">
												<div class="post-meta">
													<div class="asker-meta">
														<span class="qa-message-what"></span>
														<span class="qa-message-when">
															<h5><?php echo $row->SenderNumber;?></h5>
														</span>
														<span class="qa-message-who">

															<span class="qa-message-who-data"><a href="./index.php?qa=user&qa_1=admin"></a></span>
														</span>
													</div>
													<h6><span class="qa-message-when-data"><span class="glyphicon glyphicon-time"></span>  <?php echo $row->ReceivingDateTime;//date ("D, d M Y H:i:s",strtotime($row->ReceivingDateTime));?></span></h6>
												</div>
											</div>
										</div>


										<div class="qa-message-content"><?php
												$cut = character_limiter(strip_tags($row->TextDecoded),6);
												echo anchor('inbox/detail/'.$row->ID, $cut);
												?>
									</div>
									<small class="pull-right"><?php echo $reply.' '.$forward.' '.$delete;?></small><br>

								</div>
							</div>
							
							
							
						</div>
</div>
						<?php
					}
					?>
