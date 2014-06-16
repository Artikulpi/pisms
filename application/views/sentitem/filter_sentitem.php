<div class="container-fluid">
	<div class="row">
<div class="col-sm-12 col-md-12">
	<p class="bg-info"> Ditemukan <strong><?php echo $jumlah;?></strong> hasil pencarian pada tanggal <strong><em><?php echo $search;?></p>
</div>

	<?php
	foreach ($sentitem as $row) {
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$reply = anchor('sms/reply/'.$row->ID,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-share" data-toggle="tooltip" data-placement="bottom" title="Replay"> replay</span></span>');
		$forward = anchor('sentitem/forward/'.$row->ID,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-share-alt" data-toggle="tooltip" data-placement="bottom" title="Forward"> forward</span></span>');
		$delete = anchor('sentitem/delete/'.$row->ID,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"> hapus	</span></span>', $onclick);
		?>
		
		
		                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
		                        <div class="media">
		                            <a class="pull-left" href="#" target="_parent">
		                        		<div class="clearfix visible-sm"></div>

		                            <div class="media-body fnt-smaller">
		                                <a href="#" target="_parent"></a>

		                                <h4 class="media-heading">
		                                  <font color="#080808">Pengirim <small><?php echo $row->DestinationNumber;?></small> <span class="fnt-smaller fnt-lighter fnt-arial"></span></font></h4>
										  <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
										                                      <li> <font color="#080808"><h4 class="media-heading">Tanggal <small><?php echo $row->SendingDateTime;//date ("D, d M Y H:i:s",strtotime($row->ReceivingDateTime));?></small></font></h4></li>

								                                    
										                                  </ul>
								  
		                                <p class="hidden-xs"><span class="label label-info">Isi</span>
		<div class="well well-sm">
		<?php
					$cut = character_limiter(strip_tags($row->TextDecoded),6);
					echo anchor('inbox/detail/'.$row->ID, $cut);
					?>
	</div></p><hr>
	<span class="fnt-smaller fnt-lighter fnt-arial"><div class="text-right">
		<?php echo $reply.' '.$forward.' '.$delete;?>
	</div></span>
	                            </div>
	                        </div>
	                    </div><!-- End Listing-->

                   
	                    <!-- Begin Listing: 704 SAINT GEORGES ST-->
                    
	                </div>
		
		<tr>
			<td><span class="label label-success"></span></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>


		<?php
	}
	?>
</tbody>
</table>
	</div></div>