    <div class="container-fluid">
	<div class="row">
        <div class="col-xs-12 col-sm-offset-0 col-sm-12">
            <div class="row">
                <div class="col-xs-4 my_planHeader my_plan1">
                    <div class="my_planTitle"><?php echo $sum_contact?></div>
                    <div class="my_planPrice">Jumlah kontak</div>
                    <a href="<?php echo site_url('contact')?>" type="button" class="btn btn-default">Lihat Kontak »</a>
                </div>
                <div class="col-xs-4 my_planHeader my_plan2">
                    <div class="my_planTitle"><?php echo $sum_inbox?></div>
                    <div class="my_planPrice">Jumlah Kotak Masuk</div>
                    <a href="<?php echo site_url('inbox')?>" type="button" class="btn btn-default">Lihat Pesan Masuk »</a>
                </div>
                <div class="col-xs-4 my_planHeader my_plan3">
                    <div class="my_planTitle"><?php echo $sum_sentitem?></div>
                    <div class="my_planPrice">Jumlah Pesan Terkirim</div>
                    <a href="<?php echo site_url('sentitem')?>" type="button" class="btn btn-default">Lihat Pesan Terkirim »</a>
                </div>
            </div>
        </div>
   </div>


