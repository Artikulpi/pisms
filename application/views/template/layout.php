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
	<link rel="shortcut icon" href="<?=base_url();?>media/image/Pedoman-Logo-transparant.png">

	<title>piSMS - <?=$title?></title>

	<link href='http://fonts.googleapis.com/css?family=Century-Gothic:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Century-Gothic:400,300,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?=base_url();?>media/js/jquery.js"></script>
	<script type="text/javascript" src="<?=base_url();?>media/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>media/js/bootstrap.min.js"></script>

</head>
<body>

		<!-- /Header
		================================================= -->
		
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span></button><a class="navbar-brand" href=""><img src="/pisms/media/img/SMS.png" class="img-rounded" width="30">piSMS | <small><?=$title?></small></a>
				</div>
				<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav navbar-right">
								                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account
								                                        <b class="caret"></b></a>
								                                        <ul class="dropdown-menu">
								                                            <li>
								<li><a style="margin-top: 15px" class="btn" href="<?=site_url('auth/logout');?>"><i class="glyphicon glyphicon-user"></i> <?=$this->session->userdata('user');?> | Logout <i class="glyphicon glyphicon-lock"></i></a></li>
							</ul>
						</div>
					</div>
		</div>
		
		<div class="login"></div>
		<!-- List Menu -->
		
		<div class="list">
			
			<div class="list-group">
				
				<a style="background-color: #006E7D; border-color:transparent;" class="list-group-item active">List Menu</a>
				<a href="<?=site_url('admin')?>" class="list-group-item"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
				<a href="<?=site_url('sms/create')?>" class="list-group-item"><i class="glyphicon glyphicon-file"></i> Tulis Pesan</a>
				<a href="<?=site_url('sms/inbox')?>" class="list-group-item"><i class="glyphicon glyphicon-tasks"></i> Inbox</a>
				<a href="<?=site_url('sms/outbox')?>" class="list-group-item"><i class="glyphicon glyphicon-book"></i> Outbox</a>
				<a href="<?=site_url('sms/sentitem')?>" class="list-group-item"><i class="glyphicon glyphicon-book"></i> Sent Item</a>
				<br>
				<a style="background-color: #006E7D; border-color:transparent;" class="list-group-item active">List Menu</a>
				<a href="<?=site_url('contact')?>" class="list-group-item"><i class="glyphicon glyphicon-file"></i> Kontak</a>
				<a href="<?=site_url('pigroup')?>" class="list-group-item"><i class="glyphicon glyphicon-tasks"></i> Grup</a>
				<a href="<?=site_url('contactgroup')?>" class="list-group-item"><i class="glyphicon glyphicon-tasks"></i> Anggota Grup</a>
				<br>
				<a style="background-color: #006E7D; border-color:transparent;" class="list-group-item active">List Menu</a>
				<a href="<?=site_url('log_activity')?>" class="list-group-item"><i class="glyphicon glyphicon-th-list"></i> Log Aktifitas</a>
				<?php if($this->session->userdata('role')==1){?>
				<a href="<?=site_url('user')?>" class="list-group-item"><i class="glyphicon glyphicon-th-list"></i> List User</a>
				<?php
			}
			?>
			<a href="<?=site_url('user/reset/'.$this->session->userdata('id'));?>" class="list-group-item"><i class="glyphicon glyphicon-check"></i> Ubah Password <strong>[ <?=$this->session->userdata('user')?> ]</strong></a>
			<!--a href="" class="list-group-item"><i class="glyphicon glyphicon-tag"></i> Page</a>
			<a href="" class="list-group-item"><i class="glyphicon glyphicon-user"></i> Pengguna</a>
			<a href="" class="list-group-item"><i class="glyphicon glyphicon-tags"></i> Media Manager</a-->
			</div>
		</div>
	
	
		<div class="content content-top">
			<div class="panel-body">
				<div class="main-admin">
					<div class="panel panel-default">
						<div style="background-color: #006E7D;" class="panel-heading">
							<h3 style="color: white;" class="panel-title"><?=$header?></h3>
						</div>
						<div class="panel-body">
							<div class="panel" style="width: 100%; float: left;">
								<?php isset($page) ? $this->load->view($page) : null; ?>
								<!--div class="panel-heading">
									<h3 class="panel-title">Admin</h3>
								</div-->
								<!--div class="panel-body">
									<table class="table table-condensed">
										<tbody>
											<tr><td align="center"><b>Total Admin</b></td></tr>
											<tr><td align="center">ADMIN</td></tr>
										</tbody>
									</table>
								</div-->
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
	      <p class="navbar-text pull-left">© pisms-2014
	      </p>
			<div class="navbar-collapse collapse">
		  		      	<a href="#"><p class="navbar-text pull-right">About Us
		  		      </p>
		  		      	<a href="#"><p class="navbar-text pull-right">Contact
		  		      </p>	
					</div>
				</div>
	</div>
			  </div>
			