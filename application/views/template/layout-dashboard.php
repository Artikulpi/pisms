<!DOCTYPE HTML>
<html lang="en">
<head>

	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?php echo base_url(); ?>media/css/style.css" rel="stylesheet" type='text/css'>
	<link href="<?php echo base_url(); ?>media/css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="media/image/Pedoman-Logo-transparant.png">

	<title>piSMS - <?=$title?></title>

	<link href='http://fonts.googleapis.com/css?family=Century-Gothic:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Century-Gothic:400,300,700' rel='stylesheet' type='text/css'>

	<script src="media/js/jquery.min.js"></script>
	<script type="text/javascript" src="media/js/bootstrap.custom.js"></script>

</head>
<body>

		<!-- /Header
		================================================= -->
		
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="">piSMS | <small><?=$title?></small></a>
				</div>
				
			</div>
		</div>
		
		<div class="login"></div>
		<!-- List Menu -->
		
		<!--div class="list">
			<div class="list-group">
				<a style="background-color: #222; border-color:transparent;" href class="list-group-item active">List Menu</a>
				<a href="" class="list-group-item"><i class="glyphicon glyphicon-book"></i> Dashboard</a>
				<a href="" class="list-group-item"><i class="glyphicon glyphicon-file"></i> Berita</a>
				<a href="" class="list-group-item"><i class="glyphicon glyphicon-tasks"></i> Kategori Berita</a>
				<a href="" class="list-group-item"><i class="glyphicon glyphicon-book"></i> Banner</a>
				<a href="" class="list-group-item"><i class="glyphicon glyphicon-camera"></i> Sorotan</a>
				<a href="" class="list-group-item"><i class="glyphicon glyphicon-th-list"></i> Link Terkait</a>
				<a href="" class="list-group-item"><i class="glyphicon glyphicon-check"></i> Event</a>
				<a href="" class="list-group-item"><i class="glyphicon glyphicon-tag"></i> Page</a>
				<a href="" class="list-group-item"><i class="glyphicon glyphicon-user"></i> Pengguna</a>
				<a href="" class="list-group-item"><i class="glyphicon glyphicon-tags"></i> Media Manager</a>
			</div>
		</div-->
		<div class="content content-top">
			<?php for($i=0; $i<3; $i++){
				echo '<br>';
			}
			?>
			<?php isset($page) ? $this->load->view($page) : null; ?>


			<!--div class="panel-body">
				<div class="main-admin">
					<div class="panel panel-default">
						<div style="background-color: #222;" class="panel-heading">
							<h3 style="color: white;" class="panel-title">Dashboard</h3>
						</div>
						<div class="panel-body">
							<div class="panel panel-default" style="width: 20%; float: left; margin-left: 20px">
								<div class="panel-heading">
									<h3 class="panel-title">Admin</h3>
								</div>
								<div class="panel-body">
									<table class="table table-condensed">
										<tbody>
											<tr><td align="center"><b>Total Admin</b></td></tr>
											<tr><td align="center">ADMIN</td></tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div-->
			<div id="dialog-confirm" title="Apakah anda yakin?" style="display: none">
				<p>
					<span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>
					"Data akan dihapus !"
				</p>
			</div>
		</div>