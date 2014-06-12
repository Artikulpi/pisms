<form class="navbar-form navbar-right" action="<?php echo site_url('sentitem/search')?>" role="search" method="POST">
	<div class="form-group">
		<input type="text" name="cari" class="form-control" placeholder="Search">
	</div>
	<button type="submit" class="btn btn-default">Submit</button>	
</form>
	<div class="col-sm-6 col-md-8"><p class="bg-info">
Ditemukan <strong><?php echo $jumlah;?></strong> hasil pencarian dengan kata kunci <strong><em><?php echo $search;?></em></strong></p></div>
<table class="table table-striped">
	<thead>
		<th>No. Tujuan</th>
		<th>Isi</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</thead>
	<?php
	foreach ($sentitem as $row) { 
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$delete = anchor('sentitem/delete/'.$row->ID,'<span class="glyphicon glyphicon-trash"></span>', $onclick);
		?>
		<tr>
			<td><?php echo $row->DestinationNumber;?></td>
			<td><?php echo $row->TextDecoded;?></td>
			<td><?php echo $row->SendingDateTime;?></td>
			<td><?php echo $delete;?></td>
		</tr>

		<?php
	}
	?>
</table>
