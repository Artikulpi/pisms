<div class="panel panel-default">
	<div class="panel-body">
		<form action="<?php echo site_url('contact/search')?>" method="POST">
			<div class="col-sm-3">
				<input type="text" name="search" class="form-control" placeholder="Cari Kontak">
			</div>
				<div class="col-sm-1">
				<span data-toggle="tooltip" data-placement="bottom" title="Filter Pencarian">
					<input type="submit" value="Cari" class="btn btn-info"></span>
				</div>
			</form>
		</div>
	</div>

		<table class="table table-striped">
			<thead>
				<th>Nama</th>
				<th>Aksi</th>
			</thead>
			<tbody>

				<?php
				foreach ($contact as $row) {
					$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
					$edit = anchor('contact/edit/'.$row->id,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="Ubah kontak"> ubah</span></span>');
					$delete = anchor('contact/delete/'.$row->id,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus kontak"> hapus</span></span>', $onclick);
					?>
					<tr>
						<td><span data-toggle="tooltip" data-placement="bottom" title="Detail kontak"><i class="glyphicon glyphicon-user"></i> <?php echo anchor('contact/detail/'.$row->id,$row->name)?></span></td>

						<td><?php echo $edit.'&nbsp;'.$delete?></td>
					</tr>
					<?php
				} ?> 

				</tbody> 
			</table>
			<br>
			<span data-toggle="tooltip" data-placement="bottom" title="Tambah kontak">
		<a href="<?php echo site_url('contact/add')?>" class="btn btn-default btn-md"><b>+</b> Tambah Kontak</a>
				
<div class="text-right"><?php echo $halaman?></div>