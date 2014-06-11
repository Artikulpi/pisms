<span class="label label-success">Pengirim</span> <?php echo $sms->SenderNumber;?>
<br>
<span class="label label-success">Tanggal</span> <?php echo $sms->ReceivingDateTime;?>
<br>
<span class="label label-info">Isi</span>
<div class="well well-sm">
	<?php echo $sms->TextDecoded;?>
</div></div>

<div class="text-right">
	<a href="<?php echo site_url('sms/reply/'.$sms->ID)?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-share"></span></a>
	<a href="<?php echo site_url('inbox/forward/'.$sms->ID)?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-share-alt"></span></a>
	<a href="<?php echo site_url('inbox/delete/'.$sms->ID)?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');"><span class="glyphicon glyphicon-trash"><span></a>
</div>
