Nama : <?=$contact->name?><br>
Telepon : <?=$contact->phone_number?><br>
Organisasi : <?=$contact->organisation?><br>
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
<a href="<?=site_url('contact')?>" class="btn btn-info btn-xs">Kontak</a>
<a href="<?=site_url('sms/sendto/'.$contact->id)?>" class="btn btn-warning btn-xs">Kirim SMS</a>
<a href="<?=site_url('contact/delete/'.$contact->id)?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a>