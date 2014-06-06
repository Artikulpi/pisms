
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 col-md-2">
            <img src="<?php echo base_url();?>media/img/Manager.png"
            alt="" class="img-rounded img-responsive" width="250"/>
        </div>
        <div class="col-sm-4 col-md-4">
            <blockquote>
                <p>Nama : <?php echo $contact->name?><br></p> 
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
<div class="col-sm-6 col-md-10">
<a href="<?php echo site_url('contact')?>" class="btn btn-info btn-xs">Kontak</a>
<a href="<?php echo site_url('sms/sendto/'.$contact->id)?>" class="btn btn-warning btn-xs">Kirim SMS</a>
<a href="<?php echo site_url('contact/delete/'.$contact->id)?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a><br>

      
       
   
	