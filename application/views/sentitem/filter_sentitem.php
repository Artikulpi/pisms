<div class="panel panel-default">
	<div class="panel-body">
		<form action="<?php echo site_url('sentitem/filter')?>" method="POST">
			<div class="col-sm-2">
				<select name="mesorphone" class="form-control">
					<option value="pesan">Pesan</option>
					<option value="phone">Kontak</option>
				</select>
			</div>
			<div class="col-sm-3">
				<input type="text" name="date_start" class="form-control" id="from" placeholder="Tgl mulai">
			</div>
			<div class="col-sm-3">
				<input type="text" name="date_end" class="form-control" id="to" placeholder="Tgl akhir">
			</div>
			<div class="col-sm-3">
				<input type="text" name="keyword" class="form-control" placeholder="Keyword">
			</div>
			<div class="col-sm-1">
				<span data-toggle="tooltip" data-placement="bottom" title="Filter Pencarian"><input type="submit" value="Filter" class="btn btn-info"></span>
			</div>
		</form>				
	</div>
</div>

	<div class="col-sm-12 col-md-12">
		<p class="bg-info"> Ditemukan <strong><?php echo $jumlah;?></strong> hasil pencarian pada tanggal <strong><em><?php echo $search;?></p>
	</div>

	<?php
	foreach ($sentitem as $row) {
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$delete = anchor('sentitem/delete/'.$row->ID,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"> Hapus</span></span>', $onclick);
		?>
		


		<div class="message-item" id="m1">
			<div class="message-inner">
				<div class="message-head clearfix">
					<div class="avatar pull-left"><img src="<?php echo base_url();?>media/img/images.jpeg">
					</div>
					<div class="user-detail">
						<div class="post-meta">
							<div class="asker-meta">
								<span class="qa-message-what"></span>
								<span class="qa-message-when">
									<h5><?php echo $row->DestinationNumber;?></h5>
								</span>
								<span class="qa-message-who">

									<span class="qa-message-who-data"><a href="./index.php?qa=user&qa_1=admin"></a></span>
								</span>
							</div>
							<h6><span class="qa-message-when-data"><span class="glyphicon glyphicon-time"></span>  <?php echo $row->SendingDateTime;//date ("D, d M Y H:i:s",strtotime($row->ReceivingDateTime));?></span></h6>
						</div>
					</div>
				</div>


				<div class="qa-message-content"><?php
				$cut = character_limiter(strip_tags($row->TextDecoded),6);
				echo anchor('inbox/detail/'.$row->ID, $cut);
				?>
			</div>
			<small class="pull-right"><?php echo $delete;?></small><br>

		</div>
	</div>

	<?php
}
?>
