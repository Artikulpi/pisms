
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-12">
     <h2>Selamat datang di aplikasi piSMS</h2>
	 </div>
	</div>
<hr>

	<div class="row destacados">
		<div class="col-md-4">
    	    <div class="hero-widget well well-sm">
                <div class="icon">
                     <a href="#"><img src="<?php echo base_url();?>media/img/daftar.png" class="img-rounded" width="80"></a>
                </div>
                <div class="text">
                    <var><?php echo $sum_contact?></var>
                    <label class="text-muted">Jumlah kontak</label>
                </div>
                <a href="<?php echo site_url('contact')?>" class="btn btn-primary" title="Enlace">Lihat Kontak »</a>
            </div>
		</div>
        <div class="col-md-4">
            <div class="hero-widget well well-sm">
                <div class="icon">
                     <a href="#"><img src="<?php echo base_url();?>media/img/inbox.png" class="img-rounded" width="70"></a>
                </div>
                <div class="text">
                    <var><?php echo $sum_inbox?></var>
                    <label class="text-muted">Jumlah Kotak Masuk</label>
                </div>
                <a href="<?php echo site_url('sms/inbox')?>" class="btn btn-primary" title="Enlace">Lihat Pesan Masuk »</a>
            </div>
		</div>
        <div class="col-md-4">
            <div class="hero-widget well well-sm">
                <div class="icon">
                     <a href="#"><img src="<?php echo base_url();?>media/img/outbox.png" class="img-rounded" width="70"></a>
                </div>
                <div class="text">
                    <var><?php echo $sum_sentitem?></var>
                    <label class="text-muted">Jumlah Pesan Terkirim</label>
                </div>
                <a href="<?php echo site_url('sms/sentitem')?>" class="btn btn-primary" title="Enlace">Lihat Pesan Terkirim »</a>
            </div>
    	</div>
	</div>
</div>


