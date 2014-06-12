					<small class="pull-right">
					<a class="btn btn-primary" href="#primary" data-toggle="modal"><h5><i class="glyphicon glyphicon-search"></i> Search</h5></a><hr>
					</small>
    <!-- Modal -->
    <div class="modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1><i class="glyphicon glyphicon-thumbs-up"></i> Pencarian Pesan Terkirim</h1>
                </div>
                <div class="modal-body">
					<form class="form-inline navbar-right" role="form" action="<?php echo site_url('sentitem/search')?>" role="search" method="POST">
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

<div class="col-sm-12 col-md-10">
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