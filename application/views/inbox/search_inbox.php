					<small class="pull-right">
					<a class="btn btn-primary" href="#primary" data-toggle="modal"><h5><i class="glyphicon glyphicon-search"></i> Search</h5></a><hr>
					</small>
    <!-- Modal -->
    <div class="modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1><i class="glyphicon glyphicon-thumbs-up"></i> Primary Modal</h1>
                </div>
                <div class="modal-body">
					<form class="form-inline navbar-right" role="form" action="<?php echo site_url('inbox/search')?>" role="search" method="POST">
						<div class="form-group">
							<div class="well well-sm">
								<input type="text" name="cari" class="form-control" placeholder="Search">
								<div class="col-sm-4">
									<button type="submit" class="btn btn-default">Submit</button>
								</div></small></div></div>
							</form><br>
                		</div>
                		<div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal -->
	
	
	<div class="col-sm-6 col-md-8"><p class="bg-info">
Ditemukan <strong><?php echo $jumlah;?></strong> hasil pencarian dengan kata kunci <strong><em><?php echo $search;?></em></strong></p></div>

	<?php
	foreach ($inbox as $row) {
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$reply = anchor('sms/reply/'.$row->ID,'<span class="btn btn-xs btn-success"><span class="glyphicon glyphicon-share" data-toggle="tooltip" data-placement="bottom" title="Replay"></span></span>');
		$forward = anchor('inbox/forward/'.$row->ID,'<span class="btn btn-xs btn-success"><span class="glyphicon glyphicon-share-alt" data-toggle="tooltip" data-placement="bottom" title="Forward"></span></span>');
		$delete = anchor('inbox/delete/'.$row->ID,'<span class="btn btn-xs btn-success"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></span></span>', $onclick);
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
	                                  <a href="#" target="_parent">@_<?php echo $row->SenderNumber;?> <span class="fnt-smaller fnt-lighter fnt-arial"></span><small class="pull-right"></small></a></h4><br>
									  <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
									                                      <li><?php echo $row->ReceivingDateTime;//date ("D, d M Y H:i:s",strtotime($row->ReceivingDateTime));?></li>

								                                    
									                                  </ul>
								  
	                                <p class="hidden-xs"><?php
			$cut = character_limiter(strip_tags($row->TextDecoded),100);
			echo anchor('inbox/detail/'.$row->ID, $cut);
			?></p><hr><span class="fnt-smaller fnt-lighter fnt-arial"><?php echo $reply.' replay '.$forward.' forward '.$delete.' hapus';?></span>
	                            </div>
	                        </div>
	                    </div><!-- End Listing-->
					</div>
						<?php
					}
					?>
					</div></div></div></div>