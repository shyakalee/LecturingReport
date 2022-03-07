<!doctype html>
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
		<style type="text/css">
			body{
				background-image: url(<?php echo base_url('assets/images/08.gif') ?>);
				background-attachment: fixed;
				background-position: center;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle button-color" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="<?php echo base_url('Admin')?>" class="navbar-brand"><h4 style="margin-top: 0;"><span class="glyphicon glyphicon-education"></span> Online Lecturing Monitoring System</h4></a>
				</div>
				<div class="navbar-collapse collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url('Admin')?>"><span class="glyphicon glyphicon-home"></span> home</a></li>
						<?php
							$userId = $this->session->userdata('User_Id');
							$fname = $this->session->userdata('User_Fname');
							$lname = $this->session->userdata('User_Lname');

							if($userId == 1){
								echo'<li><a href="'.base_url('Add_admin').'"><span class="glyphicon glyphicon-plus"></span> Admin</a></li>';
							}
						?>
						<li><a href="<?php echo base_url('Add_depart')?>"><span class="glyphicon glyphicon-plus"></span> Depart</a></li>
						<li><a href="<?php echo base_url('Add_course')?>"><span class="glyphicon glyphicon-plus"></span> Course</a></li>
						<li><a href="<?php echo base_url('Add_leader')?>"><span class="glyphicon glyphicon-plus"></span> Leader</a></li>
						<li><a href="<?php echo base_url('Add_lecture')?>"><span class="glyphicon glyphicon-plus"></span> Lecture</a></li>
						<li><a href="<?php echo base_url('Add_student')?>"><span class="glyphicon glyphicon-plus"></span> Student</a></li>
						<li class="dropdown user-dialog"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $fname; ?></a>
							<ul class="dropdown-menu">
								<li class="user-header text-center">
									<img src="<?php echo base_url('assets/images/peoples/user-m.png')?>" class="img-responsive img-circle profile" alt="User Image"/>
									<p><?php if($userId == 1){echo'Chief Admin';}else{echo'Admin';}?><br /><?php echo $fname.' '.$lname;?></p>
								</li>
								<li class="user-footer">
									<div class="pull-left">
										<a href="<?php echo base_url('Admin')?>" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="<?php echo base_url('Login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row dash-section">
				<div class="col-sm-3">
					<div class="thumbnail box-shadow">
						<div class="page-header">
							<?php
								$userId = $this->session->userdata('User_Id');
								$fname = $this->session->userdata('User_Fname');
								$lname = $this->session->userdata('User_Lname');
							?>
							<h3 class="text-center"><?php if($userId == 1){echo'Chief Admin';}else{echo'Admin';}?></h3>
							<img src="<?php echo base_url('assets/images/peoples/user-m.png')?>" class="img-responsive" style="margin:auto;width:150px"/>
						</div>
						<p class="text-primary">Name: <?php echo $fname.' '.$lname;?></p>
					</div>
					<div class="list-group box-shadow">
						<a href="<?php echo base_url('Admin/settings')?>" class="list-group-item"><span class="glyphicon glyphicon-cog"></span> Settings</a>
						<a href="<?php echo base_url('Login/logout')?>" class="list-group-item"><span class="glyphicon glyphicon-off"></span> Logout</a>
					</div>
				</div>