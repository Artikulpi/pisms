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

			 
					<!-- Begin Listing: 218 LYNNEBROOK LN-->
					<div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
						<div class="media">
							<a class="pull-left" href="#" target="_parent">
								<div class="clearfix visible-sm"></div>

								<div class="media-body fnt-smaller">
									<a href="#" target="_parent"></a>

									<h4 class="media-heading">
										<font color="#080808"><p>Pengirim </font><small><?php echo $row->SenderNumber;?></small> <span class="fnt-smaller fnt-lighter fnt-arial"></span></p>
									</h4>
										<ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
											<li><h4 class="media-heading"><font color="#080808">Tanggal </font><small><?php echo $row->ReceivingDateTime;//date ("D, d M Y H:i:s",strtotime($row->ReceivingDateTime));?></small></h4></li>


										</ul>

										<p class="hidden-xs"><span class="label label-info">Isi</span>
											<div class="well well-sm">
												<?php
												$cut = character_limiter(strip_tags($row->TextDecoded),6);
												echo anchor('inbox/detail/'.$row->ID, $cut);
												?>
											</div>
										</p>
											<span class="fnt-smaller fnt-lighter fnt-arial"><div class="text-right">
											<?php echo $reply.' '.$forward.' '.$delete;?><br>
											</span><br>
										</div>
									</div>
								</div>
							</div><!-- End Listing-->
						</div>
</div>
						<?php
					}
					?>
