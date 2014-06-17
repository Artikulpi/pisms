
<div class="container-fluid">
    <div class="row">
		<div class="col-sm-12 col-md-12">
            <blockquote>
                <p><span class="glyphicon glyphicon-user" data-toggle="tooltip" data-placement="bottom" title="Detail Kontak"> Nama: <?php echo $contact->name?></span><br></p> 
            </blockquote>
            <p> <i class="glyphicon glyphicon-envelope"></i> Telepon : <?php echo $contact->phone_number?>
                <br
                /> <i class="glyphicon glyphicon-globe"></i> Organisasi : <?php echo $contact->organisation?>
                <br /> <i class="glyphicon glyphicon-gift"></i> Grup : 
<?php
foreach ($contactgroup as $cg) {
	if($cg->contact_id==$contact->id){
		foreach ($group as $gr) {
			if($cg->group_id==$gr->id)
				echo '<li>'.$gr->group_name.'</li>';
		}
	}
}
?></p>

<small class="pull-left">
<a href="<?php echo site_url('contact')?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-phone-alt" data-toggle="tooltip" data-placement="bottom" title="Kontak"> kontak</a>
<a href="<?php echo site_url('sms/sendto/'.$contact->id)?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-envelope" data-toggle="tooltip" data-placement="bottom" title="KirimSMS"> kirim sms</a>
<a href="<?php echo site_url('contact/edit/'.$contact->id)?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-envelope" data-toggle="tooltip" data-placement="bottom" title="KirimSMS"> Ubah</a>
<a href="<?php echo site_url('contact/delete/'.$contact->id)?>" class="btn btn-default btn-xs" onclick="return confirm('Are you sure you want to delete this item?');"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"> hapus</a></small>
</div></div></div>
   
	