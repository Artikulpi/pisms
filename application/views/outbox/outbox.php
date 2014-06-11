
	<?php
	foreach ($outbox as $row) { 
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$delete = anchor('outbox/delete/'.$row->ID,'<span class="btn btn-xs btn-success"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></span></span>', $onclick);
		?>
		<?php
	}
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
                                  <a href="#" target="_parent">@_<?php echo $row->DestinationNumber;?> <span class="fnt-smaller fnt-lighter fnt-arial"></span><small class="pull-right"><i class="glyphicon glyphicon-globe" data-toggle="tooltip" data-placement="bottom" title="Home"></i></small></a></h4><br>
								  <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
								                                      <li><?php echo $row->SendingDateTime;//date ("D, d M Y H:i:s",strtotime($row->SendingDateTime));?></</li>

								                                     	
								                                  </ul>
								  
                                <p class="hidden-xs"><?php echo $row->TextDecoded;?></p><hr><span class="fnt-smaller fnt-lighter fnt-arial"><?php echo $delete.' hapus';?></span>
                            </div>
                        </div>
                    </div><!-- End Listing-->

                   
                    <!-- Begin Listing: 704 SAINT GEORGES ST-->
                    
                </div>
<div class="text-right"><?php echo $halaman?></div>

