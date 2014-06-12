
					<form class="form-inline navbar-right" role="form" action="<?php echo site_url('sentitem/search')?>" role="search" method="POST">
						<div class="form-group">
							<div class="well well-sm">
								<input type="text" name="cari" class="form-control" placeholder="Search">
								<div class="col-sm-4">
									<button type="submit" class="btn btn-default">Submit</button>
								</div></small></div></div>
							</form>
<div class="col-sm-12 col-md-8">
	<p class="bg-info"> Ditemukan <strong><?php echo $jumlah;?></strong> hasil pencarian pada tanggal <strong><em><?php echo $search;?></p>
</div>
<div class="container-fluid">
	<div class="row">
<table class="table table-striped">
	<thead>
		<th>Dari</th>
		<th>Isi</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</thead>
<tbody>
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
</tbody>
</table>
	</div></div>