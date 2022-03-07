<?php
	$sms_good = $this->session->flashdata('sms_good');
	$sms_bad = $this->session->flashdata('sms_bad');
	//$Admn_id = $this->session->userdata('User_Id');
?>
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
						<h4 class="text-center">Update your Profile here!</h4>
						<?php if($sms_good): ?>
							<div class="alert alert-success">
								<span class="glyphicon glyphicon-ok"></span> <?php echo $sms_good;?>
							</div>
						<?php endif; ?>
						<?php if($sms_bad): ?>
							<div class="alert alert-danger">
								<span class="glyphicon glyphicon-ok"></span> <?php echo $sms_bad;?>
							</div>
						<?php endif; ?>
						<form method="post" action="<?php echo base_url('Admin/edit')?>" role="form">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<label for="name">First name</label>
										<input type="text" name="fname" value="<?php echo $person->f_name; ?>" class="form-control" placeholder="Type here ..." required />
									</div>
									<div class="col-sm-6">
										<label for="name">Last name</label>
										<input type="text" name="lname" value="<?php echo $person->l_name; ?>" class="form-control" placeholder="Type here ..." required />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-4">
										<label for="phone">Phone</label>
										<input type="number" name="phone" value="<?php echo $person->phone; ?>" class="form-control" placeholder="Type here ..." required />
									</div>
									<div class="col-sm-4">
										<label for="email">Email</label>
										<input type="email" name="email" value="<?php echo $person->email; ?>" class="form-control" placeholder="Type here ..." required/>
									</div>
									<div class="col-sm-4">
										<label for="name">Password</label>
										<input type="password" name="password" value="<?php echo $person->password; ?>" class="form-control" placeholder="Type here ..." required />
									</div>
								</div>
							</div>
							<button name="edit" class="btn btn-info">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<?php include('common_footer.php'); ?>
	</body>
</html>