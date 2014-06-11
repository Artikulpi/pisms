<form class="navbar-form navbar-right" action="<?php echo site_url('sentitem/search')?>" role="search" method="POST">
	<div class="form-group">
		<input type="text" name="cari" class="form-control" placeholder="Search">
	</div>
	<button type="submit" class="btn btn-default">Submit</button>	
</form>
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
		$delete = anchor('sentitem/delete/'.$row->ID,'<span class="btn btn-xs btn-success"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></span></span>', $onclick);
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

<div class="text-right"><?php echo $halaman?></div>

