<div class="panel panel-default">
	<div class="panel-body">
		<form action="<?php echo site_url('inbox/filter')?>" method="POST">
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

<?php
foreach ($inbox as $row) {
	$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
	$reply = anchor('sms/reply/'.$row->ID,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-share" data-toggle="tooltip" data-placement="bottom" title="Balas"> Balas</span></span>');
	$forward = anchor('inbox/forward/'.$row->ID,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-share-alt" data-toggle="tooltip" data-placement="bottom" title="Teruskan"> Teruskan</span></span>');
	$delete = anchor('inbox/delete/'.$row->ID,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"> Hapus</span></span>', $onclick);
	?>



	<div class="message-item" id="m1">
		<div class="message-inner">
			<div class="message-head clearfix">
				<div class="avatar pull-left"><img src="<?php echo base_url();?>media/img/images.jpeg">
				</div>
				<div class="user-detail">
					<div class="post-meta">
						<div class="asker-meta">
							<span class="qa-message-when">
								<?php
								foreach ($contact as $key) {
									if($key->phone_number == $row->SenderNumber){
										echo anchor('contact/detail/'.$key->id, $key->name);
									}
								}
								?>
								<h5><?php echo $row->SenderNumber;?></h5>
							</span>

							<span class="qa-message-who">
								<span class="qa-message-who-data"></span>
							</span>
						</div>
						<h6>
							<span class="qa-message-when-data"><span class="glyphicon glyphicon-time"></span>  <?php echo $row->ReceivingDateTime;//date ("D, d M Y H:i:s",strtotime($row->ReceivingDateTime));?></span></h6>
						</div>
					</div>
				</div>


				<div class="qa-message-content"><?php
				$cut = character_limiter(strip_tags($row->TextDecoded),10);
				echo anchor('inbox/detail/'.$row->ID, $cut);
				?>
			</div>
			<small class="pull-right"><?php echo $reply.' '.$forward.' '.$delete;?></small><br>

		</div>
	</div>


	<?php }   ?>
	<div class="text-right"><?php echo $halaman?></div>






