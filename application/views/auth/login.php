<div class="text-center">
	<form class="form-inline" name="login" role="form" action="<?=site_url('auth/login');?>" method="POST">
		<div class="form-group">
			<label class="sr-only" for="exampleInputEmail2">Email address</label>
			<input type="text" name="user" class="form-control" id="exampleInputEmail2" placeholder="Username">
		</div>
		<div class="form-group">
			<label class="sr-only" for="exampleInputPassword2">Password</label>
			<input type="password" name="pass" class="form-control" id="exampleInputPassword2" placeholder="Password">
		</div>
		<!--div class="checkbox">
			<label>
				<input type="checkbox" name="remember_me"> Remember me
			</label>
		</div-->
		<button type="submit" class="btn btn-default">Sign in</button>
	</form>
</div>