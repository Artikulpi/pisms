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
	<link href="<?php echo base_url(); ?>media/css/jquery-ui-1.10.4.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo base_url();?>media/image/Pedoman-Logo-transparant.png">

	<title>piSMS - <?php echo $title?></title>
	
	<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery-ui-1.10.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>media/js/bootstrap.min.js"></script>


	<script>
	$(function() {
		$( "#from" ).datepicker({
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 1,
			onClose: function( selectedDate ) {
				$( "#to" ).datepicker( "option", "minDate", selectedDate );
			}
		});
		$( "#to" ).datepicker({
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 1,
			onClose: function( selectedDate ) {
				$( "#from" ).datepicker( "option", "maxDate", selectedDate );
			}
		});
	});
	</script>
	<a href="http://www.publicdomainpictures.net/pictures/10000/nahled/1-1249480650QT9U.jpg"></a>
	<style type="text/css">
	body 
	{
		background-image:url('<?php echo base_url();?>media/img/pap.jpg');
	}

	</style>
</head>
<body>

		
		<div class="container-fluid">
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span></button><a class="navbar-brand" href="<?php echo site_url('admin') ?>"><i class="glyphicon glyphicon-envelope" data-toggle="tooltip" data-placement="bottom" title="piSMS"> piSMS</i></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('user');?> <b class="caret"></b>&nbsp;&nbsp;&nbsp;&nbsp;</a>
							<ul class="dropdown-menu">
								&nbsp;&nbsp;<li align="center" class="well">
								<div class="navbar-content">
									<div class="row">
										<div class="col-md-5">
											<img src="<?php echo base_url();?>media/img/images.jpeg"><p class="text-center small">
											<a href="#">Ganti</a></p>
										</div>
										<div class="col-md-7">
											<span><?php echo $this->session->userdata('user');?></span>
											<p class="text-muted small">mail@gmail.com</p>
											<div class="divider"></div>
											<a href="<?php echo site_url('user/detail/'.$this->session->userdata('id'));?>" class="btn btn-primary btn-sm active">Lihat Profil</a>
										</div>
									</div>
								</div>
								<li><a style="margin-top: 15px" class="btn" href="<?php echo site_url('user/reset/'.$this->session->userdata('id'));?>"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="bottom" title="Ubah password"> Ubah Password <strong>[ <?php echo $this->session->userdata('user')?> ]</i></strong></a>
								</li><hr>
								<li><a href="<?php echo site_url('auth/logout');?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-lock" data-toggle="tooltip" data-placement="bottom" title="Keluar"> Keluar</i></a>
								</li>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
			
			<div class="login"></div>
			
			
			<div class="list">
				
				<div class="list-group">
					
					<a style="background-color: #006E7D; border-color:transparent;" class="list-group-item active">Pesan</a>
					<a href="<?php echo site_url('admin')?>" class="list-group-item"><i class="glyphicon glyphicon-home" data-toggle="tooltip" data-placement="bottom" title="Home"> Dashboard</i></a>
					<a href="<?php echo site_url('sms/create')?>" class="list-group-item"><i class="glyphicon glyphicon-file" data-toggle="tooltip" data-placement="bottom" title="Tulis pesan"> Tulis Pesan</i></a>
					<a href="<?php echo site_url('inbox')?>" class="list-group-item"><i class="glyphicon glyphicon-download-alt" data-toggle="tooltip" data-placement="bottom" title="Pesan masuk"> Kotak Masuk</i></a>
					<a href="<?php echo site_url('outbox')?>" class="list-group-item"><i class="glyphicon glyphicon-open" data-toggle="tooltip" data-placement="bottom" title="Pesan keluar"> Kotak Keluar</i></a>
					<a href="<?php echo site_url('sentitem')?>" class="list-group-item"><i class="glyphicon glyphicon-send" data-toggle="tooltip" data-placement="bottom" title="Pesan terkirim"> Pesan Terkirim</i></a>
					<a href="<?php echo site_url('sms/draft')?>" class="list-group-item"><i class="glyphicon glyphicon-folder-open" data-toggle="tooltip" data-placement="bottom" title="Draf"> Draf</i></a>
					<br>
					<a style="background-color: #006E7D; border-color:transparent;" class="list-group-item active">Kontak & Grup</a>
					<a href="<?php echo site_url('contact')?>" class="list-group-item"><i class="glyphicon glyphicon-phone-alt" data-toggle="tooltip" data-placement="bottom" title="Draf Kontak"> Kontak</i></a>
					<a href="<?php echo site_url('pigroup')?>" class="list-group-item"><i class="glyphicon glyphicon-indent-left" data-toggle="tooltip" data-placement="bottom" title="Daftar grup"> Grup</i></a>
					<br>
					<a style="background-color: #006E7D; border-color:transparent;" class="list-group-item active">Pengaturan</a>
					<a href="<?php echo site_url('log_activity')?>" class="list-group-item"><i class="glyphicon glyphicon-list-alt" data-toggle="tooltip" data-placement="bottom" title="Log"> Log Aktivitas</i></a>
					<?php if($this->session->userdata('role')==1){?>
					<a href="<?php echo site_url('user')?>" class="list-group-item"><i class="glyphicon glyphicon-user" data-toggle="tooltip" data-placement="bottom" title="User"> Daftar Pengguna</i></a>
					<a href="<?php echo site_url('about')?>" class="list-group-item"><i class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="bottom" title="User"> Tentang pisms</i></a>
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
							<h3 style="color: white;" class="panel-title"><i class="glyphicon glyphicon-align-left" data-toggle="tooltip" data-placement="bottom" title="Title"> <?php echo $header?></i></h3>
						</div>
						<div class="panel-body">
							<div class="panel" style="width: 100%; float: left;">
								<?php isset($page) ? $this->load->view($page) : null; ?>
							</div>
						</div>
					</div>
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


	<div class="panel-footer" role="navigation">
		<div class="container-fluid">
			<p class="navbar-text pull-left">&copy; Copyright pisms-2014
			</p>
			<div class="navbar-collapse collapse">
				<p class="navbar-text pull-right">Diberdayakan oleh <a href="http://www.artikulpi.com">PISMS</a>
				</p>
			</div>
		</div>
	</div>
</div>


