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
			<td></td>
			<td><?php echo $row->SendingDateTime;?></td>
			<td><?php echo $delete;?></td>
		</tr>

		<?php
	}
	?>
	<form action="<?php echo site_url('sentitem/filter')?>" method="POST">
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

			</table>
			<div class="row">
				<div class="col-sm-12"> 
					<!-- Begin Listing: 218 LYNNEBROOK LN-->
					<div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
						<div class="media">
							<a class="pull-left" href="#" target="_parent">


								<div class="clearfix visible-sm"></div>

								<div class="media-body fnt-smaller">
									<a href="#" target="_parent"></a>

									<h4 class="media-heading">
										<a href="#" target="_parent">@_ <span class="fnt-smaller fnt-lighter fnt-arial"></span><small class="pull-right"><i class="glyphicon glyphicon-globe" data-toggle="tooltip" data-placement="bottom" title="Home"></i></small></a></h4><br>
										<ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
											<li></li>


										</ul>

										<h5><p class="hidden-xs"><?php echo $row->TextDecoded;?></p></h5><hr><span class="fnt-smaller fnt-lighter fnt-arial"></span>
									</div>
								</div>
							</div><!-- End Listing-->


							<!-- Begin Listing: 704 SAINT GEORGES ST-->

						</div>
						<div class="text-right"><?php echo $halaman?></div>

