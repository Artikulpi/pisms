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
	</div></div>
		<div class="col-sm-12 col-md-12"><p class="bg-info">
	Ditemukan <strong><?php echo $jumlah;?></strong> hasil pencarian dengan kata kunci <strong><em><?php echo $search;?></em></strong></p></div>
<table class="table table-striped">
	<thead>
		<th>Nama</th>
		<th>No Telepon</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php foreach ($contact as $key) {
			$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
			$edit = anchor('contact/edit/'.$key->id,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="Ubah kontak"> ubah</span></span>');
			$delete = anchor('contact/delete/'.$key->id,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus kontak"> hapus</span></span>', $onclick);
			?>	
			<tr>
				<td><i class="glyphicon glyphicon-user"></i> <?php echo anchor('contact/detail/'.$key->id, $key->name)?></i></td>
				<td><?php echo $key->phone_number?></td>
				<td><?php echo $edit.' '.$delete?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>