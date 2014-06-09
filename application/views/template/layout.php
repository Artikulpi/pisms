<!DOCTYPE HTML>
<html lang="en">
<head>

	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>media/img/SMS.png">
	<link href="<?php echo base_url(); ?>media/css/style.css" rel="stylesheet" type='text/css'>
	<link href="<?php echo base_url(); ?>media/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>media/css/dashboard.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo base_url();?>media/image/Pedoman-Logo-transparant.png">

	<title>piSMS - <?php echo $title?></title>

	<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>media/js/bootstrap.min.js"></script>
	
</head>
<body>

		<!-- /Header
		================================================= -->
		
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span></button><a class="navbar-brand" href="<?php echo site_url('admin') ?>"><img src="<?php echo base_url();?>media/img/sms.png" class="img-rounded" width="30">piSMS</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('user');?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li align="center" class="well">
									<div class="navbar-content">
									    <div class="row">
									       <div class="col-md-5">
									         <img src="<?php echo base_url();?>media/img/Manager.png" class="img-rounded" width="70"><p class="text-center small">
							 <a href="#">Change Photo</a></p>
							</div>
							<div class="col-md-7">
							<span><?php echo $this->session->userdata('user');?></span>
							 <p class="text-muted small">mail@gmail.com</p>
								<div class="divider"></div>
									<a href="#" class="btn btn-primary btn-sm active">View Profile</a>
									    </div>
									     </div>
									       </div>
									  <li><a style="margin-top: 15px" class="btn" href="<?php echo site_url('user/reset/'.$this->session->userdata('id'));?>"><img src="<?php echo base_url();?>media/img/edit.png" class="img-rounded" width="20"> Ubah Password <strong>[ <?php echo $this->session->userdata('user')?> ]</strong></a>
												</li><hr>
								               <li><a href="<?php echo site_url('auth/logout');?>" class="btn btn-sm btn-danger"><img src="<?php echo base_url();?>media/img/lock.png" class="img-rounded" width="30"> Logout</a>
											   </li>
								            </li>
								
							</ul>
						</div>
					</div>
				</div>
				
				<div class="login"></div>
				<!-- List Menu -->
				
				<div class="list">
					
					<div class="list-group">
						
						<a style="background-color: #006E7D; border-color:transparent;" class="list-group-item active">Pesan</a>
						<a href="<?php echo site_url('admin')?>" class="list-group-item"><img src="<?php echo base_url();?>media/img/house.png" class="img-rounded" width="20"> Dashboard</a>
						<a href="<?php echo site_url('sms/create')?>" class="list-group-item"><img src="<?php echo base_url();?>media/img/file.png" class="img-rounded" width="20"> Tulis Pesan</a>
						<a href="<?php echo site_url('sms/inbox')?>" class="list-group-item"><img src="<?php echo base_url();?>media/img/inbox.png" class="img-rounded" width="20"> Kotak Masuk</a>
						<a href="<?php echo site_url('sms/outbox')?>" class="list-group-item"><img src="<?php echo base_url();?>media/img/outbox.png" class="img-rounded" width="20"> Kotak Keluar</a>
						<a href="<?php echo site_url('sms/sentitem')?>" class="list-group-item"><img src="<?php echo base_url();?>media/img/item.png" class="img-rounded" width="20"> Pesan Terkirim</a>
						<a href="<?php echo site_url('sms/draft')?>" class="list-group-item"><img src="<?php echo base_url();?>media/img/trash.png" class="img-rounded" width="20"> Draft</a>
						<br>
						<a style="background-color: #006E7D; border-color:transparent;" class="list-group-item active">Kontak & Grup</a>
						<a href="<?php echo site_url('contact')?>" class="list-group-item"><img src="<?php echo base_url();?>media/img/daftar.png" class="img-rounded" width="20"> Kontak</a>
						<a href="<?php echo site_url('pigroup')?>" class="list-group-item"><img src="<?php echo base_url();?>media/img/grup.png" class="img-rounded" width="20"> Grup</a>
						<br>
						<a style="background-color: #006E7D; border-color:transparent;" class="list-group-item active">Utility</a>
						<a href="<?php echo site_url('log_activity')?>" class="list-group-item"><img src="<?php echo base_url();?>media/img/log.png" class="img-rounded" width="20"> Log Aktifitas</a>
						<?php if($this->session->userdata('role')==1){?>
						<a href="<?php echo site_url('user')?>" class="list-group-item"><img src="<?php echo base_url();?>media/img/User.png" class="img-rounded" width="20"> List User</a>
						<?php
					}
					?>
				
					
				</div>
			</div>
			
			
			<div class="content content-top">
				<div class="panel-body">
					<div class="main-admin">
						<div class="panel panel-default">
							<div style="background-color: #006E7D;" class="panel-heading">
								<h3 style="color: white;" class="panel-title"><?php echo $header?></h3>
							</div>
							<div class="panel-body">
								<div class="panel" style="width: 100%; float: left;">
									<?php isset($page) ? $this->load->view($page) : null; ?>
								
							</div>
						</div>
						</div
					</div>
				</div>
				<div id="dialog-confirm" title="Apakah anda yakin?" style="display: none">
					<p>
						<span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>
						"Data akan dihapus !"
					</p>
				</div>
			</div>
		</div>
		
		
		<div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
			<div class="container-fluid">
				<p class="navbar-text pull-left">© Copyright pisms-2014
				</p>
				<div class="navbar-collapse collapse">
					<a href="<?php echo site_url('about')?>"><p class="navbar-text pull-right"><img src="<?php echo base_url();?>media/img/about.png" class="img-rounded" width="20"> Tentang Kami
					</p>
					<a href="#"><p class="navbar-text pull-right"><img src="<?php echo base_url();?>media/img/Info.png" class="img-rounded" width="20"> Bantuan
					</p>	
				</div>
			</div>
		</div>
	</div>
	
