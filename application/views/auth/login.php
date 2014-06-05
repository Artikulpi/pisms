<?php echo validation_errors();
if(isset($error)){echo $error;}
?>
<link href="<?php echo base_url(); ?>media/css/signin.css" rel="stylesheet">
<div class="container">
	<div class="row centered-form">
		<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
			<div class="panel panel-default">
				<div style="background-color: #eeeeee;" class="panel-heading">
					<h3 class="panel-title">Login piSMS<small></small></h3>
				</div>
				<div class="panel-body">
					<form class="form" action="<?php echo site_url('auth/login');?>" role="form" method="POST">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-12">
								<div class="form-group">
									<input type="text" name="user" id="user" class="form-control input-sm" placeholder="Username">
									<input type="password" class="form-control input-sm" placeholder="Password" name="pass" id="pass">
								</div>
								
								<input type="submit" value="Masuk" class="btn btn-success btn-block">
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>