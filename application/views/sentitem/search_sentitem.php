					
					<form class="form-inline navbar-right" role="form" action="<?php echo site_url('sentitem/search')?>" role="search" method="POST">
						<div class="form-group">
							<div class="well well-sm">
								<input type="text" name="cari" class="form-control" placeholder="Search">
								<div class="col-sm-4">
									<button type="submit" class="btn btn-default">Submit</button>
								</div></small></div></div>
							</form>

	<div class="col-sm-6 col-md-8"><p class="bg-info">
Ditemukan <strong><?php echo $jumlah;?></strong> hasil pencarian dengan kata kunci <strong><em><?php echo $search;?></em></strong></p></div>

	<?php
	foreach ($sentitem as $row) { 
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$delete = anchor('sentitem/delete/'.$row->ID,'<span class="btn btn-xs btn-info"><span class="glyphicon glyphicon-trash"></span></span>', $onclick);
		?>
		
		<div class="row">
		</div>
		<div class="message-item" id="m1">
			<div class="message-inner">
				<div class="message-head clearfix">
					<div class="avatar pull-left"><a href="./index.php?qa=user&qa_1=admin"><img src="<?php echo base_url();?>media/img/images.jpeg"></a></div>
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
									<h6><span class="qa-message-when-data"><span class="glyphicon glyphicon-time"></span>  <?php echo $row->SendingDateTime;?></span></h6>
								</div>
							</div>
						</div>
					
													
									<div class="qa-message-content"><?php echo $row->TextDecoded;?>
								</div>
								<small class="pull-right"><?php echo $delete.' hapus';?></small><br>
									</div>
								</div>
		
		<?php
	}
	?>

