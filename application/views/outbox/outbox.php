
<?php
foreach ($outbox as $row) { 
	$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
	$delete = anchor('outbox/delete/'.$row->ID,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"> Hapus</span></span>', $onclick);
	?>
	

	<div class="message-item" id="m1">
		<div class="message-inner">
			<div class="message-head clearfix">
				<div class="avatar pull-left">
					<img src="<?php echo base_url();?>media/img/images.jpeg">
				</div>
				<div class="user-detail">
					<font color="#080808"><h5 class="handle">
						<?php
						foreach ($contact as $key) {
							if($key->phone_number == $row->DestinationNumber){
								echo anchor('contact/detail/'.$key->id, $key->name);
							}
						}
						?>
						<?php echo $row->DestinationNumber;?>
					</h5></font>
					<div class="post-meta">
						<div class="asker-meta">
							
							<span class="qa-message-when">
								<span class="qa-message-when-data"><span class="glyphicon glyphicon-time"></span> <?php echo $row->SendingDateTime;//date ("D, d M Y H:i:s",strtotime($row->SendingDateTime));?></span>
							</span>

							<span class="qa-message-who">
								<span class="qa-message-who-data">
									<a href="./index.php?qa=user&qa_1=admin"></a>
								</span>
							</span>
							
						</div>
					</div>
				</div>
			</div>
			<div class="qa-message-content"><?php echo $row->TextDecoded;?>
			</div>
			<small class="pull-right"><?php echo $delete;?></small><br>
		</div>
	</div>
	
	<?php } ?>
	<div class="text-right"><?php echo $halaman?></div>

