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
                                  <a href="#" target="_parent">Pengirim <small><?php echo $sms->SenderNumber;?></small> <span class="fnt-smaller fnt-lighter fnt-arial"></span></a></h4>
								  <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
								                                      <li><a href="#" target="_parent"><h4 class="media-heading">Tanggal <small><?php echo $sms->ReceivingDateTime;?></small></a></h4></li>

								                                    
								                                  </ul>
								  
                                <p class="hidden-xs"><span class="label label-info">Isi</span>
<div class="well well-sm">
	<?php echo $sms->TextDecoded;?>
</div></p><hr><span class="fnt-smaller fnt-lighter fnt-arial"><div class="text-right">
	<a href="<?php echo site_url('sms/reply/'.$sms->ID)?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-share" data-toggle="tooltip" data-placement="bottom" title="Replay"></span></a> replay
	<a href="<?php echo site_url('inbox/forward/'.$sms->ID)?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-share-alt" data-toggle="tooltip" data-placement="bottom" title="Forward"></span></a> forward
	<a href="<?php echo site_url('inbox/delete/'.$sms->ID)?>" class="btn btn-info btn-xs" onclick="return confirm('Are you sure you want to delete this item?');"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"><span></a> hapus
</div></span>
                            </div>
                        </div>
                    </div><!-- End Listing-->

                   
                    <!-- Begin Listing: 704 SAINT GEORGES ST-->
                    
                </div>