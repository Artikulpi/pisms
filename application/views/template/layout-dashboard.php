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
	<link rel="shortcut icon" href="media/image/Pedoman-Logo-transparant.png">
	<link href="<?php echo base_url(); ?>media/css/dashboard.css" rel="stylesheet">

	<title>piSMS - <?php echo $title?></title>

	<link href='http://fonts.googleapis.com/css?family=Century-Gothic:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Century-Gothic:400,300,700' rel='stylesheet' type='text/css'>

	<script src="media/js/jquery.min.js"></script>
	<script type="text/javascript" src="media/js/bootstrap.custom.js"></script>

</head>
<body>

		<!-- /Header
		================================================= -->
		
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span></button><a class="navbar-brand" href=""><img src="<?php echo base_url();?>media/img/SMS.png" class="img-rounded" width="30">piSMS | <small><?php echo $title?></small></a>
				</div>
				
					</div>
		</div>
		
		<div class="login"></div>
		
		<div class="content content-top">
			<?php for($i=0; $i<3; $i++){
				echo '<br>';
			}
			?>
			<?php isset($page) ? $this->load->view($page) : null; ?>


			
			<div id="dialog-confirm" title="Apakah anda yakin?" style="display: none">
				<p>
					<span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>
					"Data akan dihapus !"
				</p>
			</div>
		</div>