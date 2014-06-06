
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-12">
     <h2>Selamat datang di aplikasi piSMS</h2>
	 </div>
	</div>
<hr>

	<div class="row">
		<div class="col-sm-3">
    	    <div class="hero-widget well well-sm">
                <div class="icon">
                     <a href="<?php echo site_url('contact')?>"><img src="<?php echo base_url();?>media/img/daftar.png" class="img-rounded" width="80"></a>
                </div>
                <div class="text">
                    <var><?php echo $sum_contact?></var>
                    <label class="text-muted">Jumlah kontak</label>
                </div>
                
            </div>
		</div>
        <div class="col-sm-3">
            <div class="hero-widget well well-sm">
                <div class="icon">
                     <a href="<?php echo site_url('sms/inbox')?>"><img src="<?php echo base_url();?>media/img/inbox.png" class="img-rounded" width="70"></a>
                </div>
                <div class="text">
                    <var><?php echo $sum_inbox?></var>
                    <label class="text-muted">Jumlah Kotak Masuk</label>
                </div>
                
            </div>
		</div>
        <div class="col-sm-3">
            <div class="hero-widget well well-sm">
                <div class="icon">
                     <a href="<?php echo site_url('sms/sentitem')?>"><img src="<?php echo base_url();?>media/img/outbox.png" class="img-rounded" width="70"></a>
                </div>
                <div class="text">
                    <var><?php echo $sum_sentitem?></var>
                    <label class="text-muted">Jumlah Pesan Terkirim</label>
                </div>
                
            </div>
    	</div>
	</div>
</div>



	