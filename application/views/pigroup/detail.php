<table class="table table-striped">
	<thead>
		<th>Anggota</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php
		echo $group->group_name.'<br>';
		foreach ($chg as $key) {
			$cehage = $key->contact_id;
			$onclick = array('onclick'=>"return confirm('Anda yakin ingin menghapus?')");
			$delete = anchor('contactgroup/delete/'.$key->id,'<span class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus grup"> hapus</span></span>', $onclick);
			foreach ($contact as $con) {

				if($con->id == $cehage){ ?>
				<tr>
					<td><span data-toggle="tooltip" data-placement="bottom" title="Detail grup"><i class="glyphicon glyphicon-user"></i> <?php echo anchor('contact/detail/'.$con->id, $con->name); ?></span></td>
					<td><?php echo $delete; ?></td>
				</tr>
				<?php
			}
		}
	}
	?>
	
</tbody>
</table>