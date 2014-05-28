<?=validation_errors()?>
<div class="text-center">
	<form class="form-inline" name="login" role="form" action="<?=site_url('auth/login');?>" method="POST">
		<div class="form-group">
			<label class="sr-only">Username</label>
			<input type="text" name="user" class="form-control" placeholder="Username">
		</div>
		<div class="form-group">
			<label class="sr-only">Password</label>
			<input type="password" name="pass" class="form-control" placeholder="Password">
		</div>
		<!--div class="checkbox">
			<label>
				<input type="checkbox" name="remember_me"> Remember me
			</label>
		</div-->
		<button type="submit" class="btn btn-default">Sign in</button>
	</form>
</div>