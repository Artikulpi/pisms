<div class="col-sm-12 col-md-12">
	<form class="navbar-form navbar-right" action="<?php echo site_url('inbox/search')?>" role="search" method="POST">
		<div class="form-group">
			<input type="text" name="cari" class="form-control" placeholder="Search">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>	
	</form>
</div>
Ditemukan <strong><?php echo $jumlah;?></strong> hasil pencarian pada tanggal <strong><em><?php echo $search;?></em></strong>
<table class="table table-striped">
	<thead>
		<th>Dari</th>
		<th>Isi</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</thead>

	<?php
	foreach ($sentitem as $row) {
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$reply = anchor('sms/reply/'.$row->ID,'<span class="glyphicon glyphicon-share"></span>');
		$forward = anchor('sentitem/forward/'.$row->ID,'<span class="glyphicon glyphicon-share-alt"></span>');
		$delete = anchor('sentitem/delete/'.$row->ID,'<span class="glyphicon glyphicon-trash"></span>', $onclick);
		?>
		<tr>
			<td><span class="label label-success"><?php echo $row->DestinationNumber;?></span></td>
			<td><?php
			$cut = character_limiter(strip_tags($row->TextDecoded),6);
			echo anchor('inbox/detail/'.$row->ID, $cut);
			?></td>
			<td><?php echo $row->SendingDateTime;//date ("D, d M Y H:i:s",strtotime($row->ReceivingDateTime));?></td>
			<td><?php echo $reply.' '.$forward.' '.$delete;?></td>
		</tr>


		<?php
	}
	?>