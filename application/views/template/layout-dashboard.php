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
	<script src="<?php echo base_url(); ?>media/js/jquery.min.js"></script>
	

</head>
<body>

		<!-- /Header
		================================================= -->
		
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span></button><a class="navbar-brand" href=""><i class="glyphicon glyphicon-envelope" data-toggle="tooltip" data-placement="bottom" title="piSMS">_piSMS </i>| <small><?php echo $title?></small></a>
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