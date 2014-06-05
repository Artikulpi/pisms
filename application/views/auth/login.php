<?php echo validation_errors();
if(isset($error)){echo $error;}
?>
<link href="<?php echo base_url(); ?>media/css/signin.css" rel="stylesheet">
<div class="container">
	<form class="form-signin" action="<?php echo site_url('auth/login');?>" role="form" method="POST">
		<input type="text" class="form-control" placeholder="Username" name="user" autofocus>
		<input type="password" class="form-control" placeholder="Password" name="pass">
		<button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
	</form>
</div>