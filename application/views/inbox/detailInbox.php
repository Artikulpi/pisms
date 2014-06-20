
<div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
<div class="media-body fnt-smaller">
        <a href="#" target="_parent"></a>

        <h4 class="media-heading">
          <font color="#080808">Pengirim <small><?php echo $sms->SenderNumber;?></small> <span class="fnt-smaller fnt-lighter fnt-arial"></span></font></h4>
          <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
              <li>
                <font color="#080808"><h4 class="media-heading">Tanggal <small><?php echo $sms->ReceivingDateTime;?></small></font></h4>
              </li>


          </ul>

          <p class="hidden-xs"><span class="label label-info">Isi</span>
            <div class="well well-sm">
             <?php echo $sms->TextDecoded;?>
         </div>
     </p><hr>
 </div>
 <span class="fnt-smaller fnt-lighter fnt-arial">
    <div class="text-right">
     <a href="<?php echo site_url('sms/reply/'.$sms->ID)?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-share" data-toggle="tooltip" data-placement="bottom" title="Balas"> Balas</span></a>
     <a href="<?php echo site_url('inbox/forward/'.$sms->ID)?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-share-alt" data-toggle="tooltip" data-placement="bottom" title="Teruskan"> Teruskan</span></a>
     <a href="<?php echo site_url('inbox/delete/'.$sms->ID)?>" class="btn btn-default btn-xs" onclick="return confirm('Are you sure you want to delete this item?');"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"> Hapus<span></a>
 </span>
</div>

