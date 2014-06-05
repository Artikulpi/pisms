Nama : <?php echo $contact->name?><br>
Telepon : <?php echo $contact->phone_number?><br>
Organisasi : <?php echo $contact->organisation?><br>
Grup : 
<?php
foreach ($contactgroup as $cg) {
	if($cg->contact_id==$contact->id){
		foreach ($group as $gr) {
			if($cg->group_id==$gr->id)
				echo '<li>'.$gr->group_name.'</li>';
		}
	}
}
?>
<a href="<?php echo site_url('contact')?>" class="btn btn-info btn-xs">Kontak</a>
<a href="<?php echo site_url('sms/sendto/'.$contact->id)?>" class="btn btn-warning btn-xs">Kirim SMS</a>
<a href="<?php echo site_url('contact/delete/'.$contact->id)?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a>