					
<form class="form-inline navbar-right" role="form" action="<?php echo site_url('inbox/search')?>" role="search" method="POST">
	<div class="form-group">
		<div class="well well-sm">
			<input type="text" name="cari" class="form-control" placeholder="Search">
			<div class="col-sm-4">
				<button type="submit" class="btn btn-default">Submit</button>
			</div></small></div></div>
		</form>
		<div class="col-sm-12 col-md-8">
			<p class="bg-info"> Ditemukan <strong><?php echo $jumlah;?></strong> hasil pencarian dengan kata kunci	 <strong><em><?php echo $search;?></p>
		</div>


		<?php
		foreach ($inbox as $row) {
			$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
			$reply = anchor('sms/reply/'.$row->ID,'<span class="glyphicon glyphicon-share"></span>');
			$forward = anchor('inbox/forward/'.$row->ID,'<span class="glyphicon glyphicon-share-alt"></span>');
			$delete = anchor('inbox/delete/'.$row->ID,'<span class="glyphicon glyphicon-trash"></span>', $onclick);
			?>

			<div class="row">
				<div class="col-sm-12"> 
					<!-- Begin Listing: 218 LYNNEBROOK LN-->
					<div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
						<div class="media">
							<a class="pull-left" href="#" target="_parent">
								<div class="clearfix visible-sm"></div>

								<div class="media-body fnt-smaller">
									<a href="#" target="_parent"></a>

									<h4 class="media-heading">
										<a href="#" target="_parent">Pengirim <small><?php echo $row->SenderNumber;?></small> <span class="fnt-smaller fnt-lighter fnt-arial"></span></a></h4>
										<ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
											<li><a href="#" target="_parent"><h4 class="media-heading">Tanggal <small><?php echo $row->ReceivingDateTime;//date ("D, d M Y H:i:s",strtotime($row->ReceivingDateTime));?></small></a></h4></li>


										</ul>

										<p class="hidden-xs"><span class="label label-info">Isi</span>
											<div class="well well-sm">
												<?php
												$cut = character_limiter(strip_tags($row->TextDecoded),6);
												echo anchor('inbox/detail/'.$row->ID, $cut);
												?>
											</div></p><hr><span class="fnt-smaller fnt-lighter fnt-arial"><div class="text-right">
											<?php echo $reply.' replay '.$forward.' forward '.$delete.' hapus ';?>
										</div></span>
									</div>
								</div>
							</div><!-- End Listing-->
						</div>

						<?php
					}
					?>
