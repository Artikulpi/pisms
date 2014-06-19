
<link href="<?php echo base_url(); ?>media/css/signin.css" rel="stylesheet">
<div class="container">
	<div class="row centered-form">
		<div class="col-xs-12 col-sm-10 col-md-4 col-sm-offset-4 col-md-offset-4">
			<div class="panel panel-default">
				<div style="background-color: #eeeeee;" class="panel-heading">
					<h3 class="panel-title">Login piSMS<small></small></h3>
				</div>

				<div class="panel-body">
					<?php echo form_open('auth/login');?>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<p class="bg-warning"> 
									<?php echo validation_errors();
									if(isset($error)){echo $error;}
									?>
								</p>
								
								<input type="text" name="user" id="user" class="form-control input-sm" placeholder="Username">
								<input type="password" class="form-control input-sm" placeholder="Password" name="pass" id="pass">
							</div>

							<input type="submit" value="Masuk" class="btn btn-success btn-block">
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>