<form action="<?php echo site_url('inbox/filter')?>" method="POST">
	<select name="tgl">
		<option value="0">Tanggal</option>
		<?php
		for($i=1;$i<=31;$i++){
			?>
			<option value="<?php echo $i?>"><?php echo $i?></option>
			<?php
		}
		?>
	</select>
	<select name="bln">
		<option value="0">Bulan</option>
		<?php $bulan = array('1'=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		foreach ($bulan as $key => $value) {
			?>
			<option value="<?php echo $key?>"><?php echo $value?></option>
			<?php
		}
		?>
	</select>
	<select name="thn">
		<option value="0">Tahun</option>
		<?php for($i=2010;$i<2050;$i++){?>
		<option value="<?php echo $i?>"><?php echo $i?></option>
		<?php } ?>
	</select>
	<input type="submit" value="Filter" class="btn btn-primary">
</form>

<div class="col-sm-12 col-md-12">
	<form class="navbar-form navbar-right" action="<?php echo site_url('inbox/search')?>" role="search" method="POST">
		<div class="form-group">
			<input type="text" name="cari" class="form-control" placeholder="Search">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>	
	</form>
</div>
<table class="table table-striped">
	<thead>
		<th>Dari</th>
		<th>Isi</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</thead>

	<?php
	foreach ($inbox as $row) {
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$reply = anchor('sms/reply/'.$row->ID,'<span class="btn btn-xs btn-success"><span class="glyphicon glyphicon-share" data-toggle="tooltip" data-placement="bottom" title="Replay"></span></span>');
		$forward = anchor('inbox/forward/'.$row->ID,'<span class="btn btn-xs btn-success"><span class="glyphicon glyphicon-share-alt" data-toggle="tooltip" data-placement="bottom" title="Forward"></span></span>');
		$delete = anchor('inbox/delete/'.$row->ID,'<span class="btn btn-xs btn-success"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></span></span>', $onclick);
		?>
		<tr>
			<td><?php echo $row->SenderNumber;?></td>


			<td><?php
			$cut = character_limiter(strip_tags($row->TextDecoded),6);
			echo anchor('inbox/detail/'.$row->ID, $cut);
			?></td>


			<td><?php echo $row->ReceivingDateTime;//date ("D, d M Y H:i:s",strtotime($row->ReceivingDateTime));?></td>


			<td><?php echo $reply.' '.$forward.' '.$delete;?></td>
		</tr>


		<?php
	}
	?>



	<div class="text-right"><?php echo $halaman?></div>