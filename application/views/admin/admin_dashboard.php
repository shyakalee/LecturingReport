<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
	<head>
		<?php include('common_header.php');?>
	</head>
	<body>
		<?php include('admin_header.php');?>
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
				<div class="col-sm-9">
					<div class="thumbnail box-shadow">
						<h3 class="text-center">Summarized updates here</h3>
						<div class="row">
							<div class="col-sm-3">
								<div class="thumbnail box-shadow">
									<div class="page-header">
										<h4 class="header-text text-center">Users</h4>
									</div>
									<div class="page-body">
										<p class="text-center"><span class="glyphicon glyphicon-user gly1 text-success"></span> <span class="gly1"> <?php echo $admin_no; ?></span></p>
									</div>
									<div class="page-footer">
										<p class="text-center"><a href="<?php echo base_url('Add_admin')?>">see</a></p>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumbnail box-shadow">
									<div class="page-header">
										<h4 class="header-text text-center">Departments</h4>
									</div>
									<div class="page-body">
										<p class="text-center"><span class="glyphicon glyphicon-user gly1 text-success"></span> <span class="gly1"> <?php echo $depart_no; ?></span></p>
									</div>
									<div class="page-footer">
									<p class="text-center"><a href="<?php echo base_url('Add_depart')?>">see</a></p>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumbnail box-shadow">
									<div class="page-header">
										<h4 class="header-text text-center">Students</h4>
									</div>
									<div class="page-body">
										<p class="text-center"><span class="glyphicon glyphicon-education gly1 text-success"></span> <span class="gly1"> <?php echo $student_no; ?></span></p>
									</div>
									<div class="page-footer">
										<p class="text-center"><a href="<?php echo base_url('Add_student')?>">see</a></p>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumbnail box-shadow">
									<div class="page-header">
										<h4 class="header-text text-center">Lectures</h4>
									</div>
									<div class="page-body">
										<p class="text-center"><span class="glyphicon glyphicon-user gly1 text-success"></span> <span class="gly1"> <?php echo $lecture_no; ?></span></p>
									</div>
									<div class="page-footer">
										<p class="text-center"><a href="<?php echo base_url('Add_lecture')?>">see</a></p>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		<?php include('common_footer.php'); ?>
	</body>
</html>