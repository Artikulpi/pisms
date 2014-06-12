					<small class="pull-right">
					<a class="btn btn-primary" href="#primary" data-toggle="modal"><h5><i class="glyphicon glyphicon-search"></i> Search</h5></a><hr>
					</small>
    <!-- Modal -->
    <div class="modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1><i class="glyphicon glyphicon-thumbs-up"></i> Pencarian Pesan Masuk</h1>
                </div>
                <div class="modal-body">
					<form class="form-inline navbar-right" role="form" action="<?php echo site_url('inbox/search')?>" role="search" method="POST">
						<div class="form-group">
							<div class="well well-sm">
								<input type="text" name="cari" class="form-control" placeholder="Search">
								<div class="col-sm-4">
									<button type="submit" class="btn btn-default">Submit</button>
								</div></small></div></div>
							</form><br>
                		</div>
                		<div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal -->
   
		<form action="<?php echo site_url('inbox/filter')?>" method="POST">
			<div class="col-sm-2">
				<select name="tgl" class="form-control">
					<option value="0">Tanggal</option>
					<?php
					for($i=1;$i<=31;$i++){
						?>
						<option value="<?php echo $i?>"><?php echo $i?></option>
						<?php
					}
					?>
				</select></div>
				<div class="col-sm-2">
					<select name="bln" class="form-control">
						<option value="0">Bulan</option>
						<?php $bulan = array('1'=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
						foreach ($bulan as $key => $value) {
							?>
							<option value="<?php echo $key?>"><?php echo $value?></option>
							<?php
						}
						?>
					</select></div>
					<div class="col-sm-2">
						<select name="thn" class="form-control">
							<option value="0">Tahun</option>
							<?php for($i=2010;$i<2050;$i++){?>
							<option value="<?php echo $i?>"><?php echo $i?></option>
							<?php } ?>
						</select></div>
						<div class="col-sm-2">
							<input type="submit" value="Filter" class="btn btn-primary">
						</div>
					</form>
					
					<?php
							foreach ($inbox as $row) {
								$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
								$reply = anchor('sms/reply/'.$row->ID,'<span class="btn btn-xs btn-info"><span class="glyphicon glyphicon-share" data-toggle="tooltip" data-placement="bottom" title="Replay"></span></span>');
								$forward = anchor('inbox/forward/'.$row->ID,'<span class="btn btn-xs btn-info"><span class="glyphicon glyphicon-share-alt" data-toggle="tooltip" data-placement="bottom" title="Forward"></span></span>');
								$delete = anchor('inbox/delete/'.$row->ID,'<span class="btn btn-xs btn-info"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></span></span>', $onclick);
								?>
					
			
				<div class="row">
				</div>
				<div class="message-item" id="m1">
					<div class="message-inner">
						<div class="message-head clearfix">
							<div class="avatar pull-left"><a href="./index.php?qa=user&qa_1=admin"><img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"></a></div>
							<div class="user-detail">
										<div class="post-meta">
											<div class="asker-meta">
												<span class="qa-message-what"></span>
												<span class="qa-message-when">
												<h5><?php echo $row->SenderNumber;?></h5>
												</span>
												<span class="qa-message-who">
						
													<span class="qa-message-who-data"><a href="./index.php?qa=user&qa_1=admin"></a></span>
												</span>
											</div>
											<h6><span class="qa-message-when-data"><span class="glyphicon glyphicon-time"></span>  <?php echo $row->ReceivingDateTime;//date ("D, d M Y H:i:s",strtotime($row->ReceivingDateTime));?></span></h6>
										</div>
									</div>
								</div>
							
															
											<div class="qa-message-content"><?php
										$cut = character_limiter(strip_tags($row->TextDecoded),10);
										echo anchor('inbox/detail/'.$row->ID, $cut);
										?>
										</div>
										<small class="pull-right"><?php echo $reply.' replay '.$forward.' forward '.$delete.' hapus';?></small><br>
											</div>
										</div>
									
							
									<?php }   ?>
								<div class="text-right"><?php echo $halaman?></div>
								
								
								
								
								
								    
													