<table class="table table-striped">
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>Grup</th>
		<th>Aksi</th>
	</thead>
	
	<tbody>
	<?php
	$no=1;
	foreach ($contactgroup as $row) {
		$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
		$edit = anchor('contactgroup/edit/'.$row->id,'<span class="glyphicon glyphicon-edit"></span>');
		$delete = anchor('contactgroup/delete/'.$row->id,'<span class="glyphicon glyphicon-trash"></span>', $onclick);
		?>
		<tr>
			<td><?php echo $no?></td>
			<td>
				<?php
				foreach ($contact as $con) {
					if ($row->contact_id == $con->id) {
						echo $con->name;
					}
				}
				?>
			</td>
			<td>
				<?php
				foreach ($group as $gr) {
					if ($row->group_id == $gr->id) {
						echo $gr->group_name;
					}
				}
				?>
			</td>
			<td><?php echo $edit.'&nbsp;'.$delete?></td>
		</tr>
		<?php
		$no++;
	} ?> 
	</tbody> 
</table>
<br>
<a href="<?php echo site_url('contactgroup/add')?>" class="btn btn-success btn-md"><b>+</b> Tambah Anggota Grup</a>
<div class="text-right"><?php echo $halaman?></div>