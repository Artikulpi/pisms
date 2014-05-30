<table class="table table-striped">
	<thead>
		<th>Nama</th>
		<th>Telepon</th>
		<th>Organisasi</th>
		<th>Grup</th>
		<th>Aksi</th>
	</thead>
	<?php
	foreach ($contact as $row) {
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$edit = anchor('contact/edit/'.$row->id,'<span class="glyphicon glyphicon-edit"></span>');
		$delete = anchor('contact/delete/'.$row->id,'<span class="glyphicon glyphicon-trash"></span>', $onclick);
		?>
		<tr>
			<td><?=$row->name?></td>
			<td><?=$row->phone_number?></td>
			<td><?=$row->organisation?></td>
			<td>
				<?php
				foreach ($contactgroup as $cg) {
					if($cg->contact_id==$row->id){
						foreach ($group as $gr) {
							if($cg->group_id==$gr->id)
								echo '<li>'.$gr->group_name.'</li>';
						}
					}
				}
				?>
			</td>
			<td><?=$edit.'&nbsp;'.$delete?></td>
		</tr>
		<?php
	} ?>  
</table>
<br>
<a href="<?=site_url('contact/add')?>" class="btn btn-success">Tambah Kontak</a>
<div class="text-right"><?=$halaman?></div>