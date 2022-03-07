<?php
	$msg = $this->session->flashdata('msg');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>OLMS</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" />
		<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" />
		<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Bootstrap css end here -->
		
		<!-- my style start here -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>" />
	</head>
	<body>
		<div class="container">
			<section class="login-container">
				<div class="page-header text-center" id="login">
					<img src="<?php echo base_url('assets/images/logo.jpg') ?>" class="img-responsive" style="margin:auto; width:400px;"/>
					<h2>Online Lecturing Monitoring System.</h2>
				</div>
				<h2 class="header-text"><span class="glyphicon glyphicon-hand-right text-info"></span> <small> To access more login here!</small></h2>
				<div class="row">
					<div class="col-sm-4 col-sm-offset-4 login-form">
						<h4 class="bg-primary text-center">Login form</h4>
						<?php if($msg): ?>
						<div class="alert alert-danger"><?php echo $msg; ?></div>
						<?php endif ?>
						<form method="post" action="<?php echo base_url('Login/login_check') ?>" role="form">
							<div class="form-group text-center">
								<label class="radio-inline"><input type="radio" name="user_type" value="1" >Admin</label>
								<label class="radio-inline"><input type="radio" name="user_type" value="4" >Lecture</label>
								<label class="radio-inline"><input type="radio" name="user_type" value="3" >Student</label>
							</div>
							<div class="form-group">
								<label for="name">Email</label>
								<input type="email" class="form-control" name="email" placeholder="Type here ..." required />
							</div>
							<div class="form-group">
								<label for="subject">Password</label>
								<input type="password" class="form-control" name="pwd" placeholder="Type here ..." required />
							</div>
							<button class="btn btn-primary">Login</button>
						</form>
					</div>
				</div>
			</section>
		</div>
		
		<?php include('common_footer.php'); ?>
	</body>
</html>