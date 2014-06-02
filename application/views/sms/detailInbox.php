<?php
echo $sms->TextDecoded;
?>
<br>
<br>
<div class="text-right">
	<a href="<?=site_url('sms/inbox')?>" class="btn btn-info">Inbox</a>
	<a href="<?=site_url('sms/reply/'.$sms->ID)?>" class="btn btn-success">Balas</a>
	<a href="<?=site_url('sms/forwardInbox/'.$sms->ID)?>" class="btn btn-warning">Forward</a>
	<a href="<?=site_url('sms/deleteInbox/'.$sms->ID)?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a>
</div>