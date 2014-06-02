<span class="label label-success">Pengirim</span>
<br>
<?=$sms->SenderNumber;?>
<br>
<span class="label label-success">Tanggal</span>
<br>
<?=$sms->ReceivingDateTime;?>
<br>
<span class="label label-success">Isi</span>
<br>
<?=$sms->TextDecoded;?>
<br>
<br>
<div class="text-right">
	<a href="<?=site_url('sms/inbox')?>" class="btn btn-info btn-xs">Inbox</a>
	<a href="<?=site_url('sms/reply/'.$sms->ID)?>" class="btn btn-success btn-xs">Balas</a>
	<a href="<?=site_url('sms/forwardInbox/'.$sms->ID)?>" class="btn btn-warning btn-xs">Forward</a>
	<a href="<?=site_url('sms/deleteInbox/'.$sms->ID)?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a>
</div>