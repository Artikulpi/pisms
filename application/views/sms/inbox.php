<table class="table table-striped">
	<thead>
		<th>Pengirim</th>
		<th>Isi</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</thead>
	<?php
	foreach ($inbox as $row) {
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$reply = anchor('sms/reply/'.$row->ID,'<span class="glyphicon glyphicon-share"></span>');
		$forward = anchor('sms/forwardInbox/'.$row->ID,'<span class="glyphicon glyphicon-share-alt"></span>');
		$delete = anchor('sms/deleteInbox/'.$row->ID,'<span class="glyphicon glyphicon-trash"></span>', $onclick);
		?>
		<tr>
			<td><?php echo $row->SenderNumber;?></td>
			<td>
				<?php
				$cut = character_limiter(strip_tags($row->TextDecoded),6);
				echo anchor('sms/detailInbox/'.$row->ID, $cut);
				?>
			</td>
			<td><?php echo $row->ReceivingDateTime;//date ("D, d M Y H:i:s",strtotime($row->ReceivingDateTime));?></td>
			<td><?php echo $reply.' '.$forward.' '.$delete;?></td>
		</tr>

		<?php
	}
	?>
</table>
<div class="text-right"><?php echo $halaman?></div>