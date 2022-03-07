<?php
	$sms_good = $this->session->flashdata('sms_good');
	$sms_bad = $this->session->flashdata('sms_bad');
?>
<!doctype html>
<html lang="en">
	<head>
		<?php include('common_header.php');?>
	</head>
	<body>
		<?php include('stdnt_header.php');?>
		<div class="container">
			<div class="row dash-section">
				<?php include('stdnt_left.php');?>
				<div class="col-sm-9">
					<div class="thumbnail box-shadow">
						<h3>Update your Profile here!</h3>
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
						<form method="post" action="<?php echo base_url('Student/edit_me') ?>" role="form">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<label for="name">First name</label>
										<input type="text" name="fname" class="form-control" placeholder="Type here ..." value="<?php echo $std_me->f_name; ?>" required />
									</div>
									<div class="col-sm-6">
										<label for="name">Last name</label>
										<input type="text" name="lname" class="form-control" placeholder="Type here ..." value="<?php echo $std_me->l_name; ?>" required />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-4">
										<label for="gender">Depart</label>
										<input type="text" class="form-control" value="<?php echo $std_me->name; ?>" disabled />
									</div>
									<div class="col-sm-2">
										<label for="gender">Level</label>
										<select name="level" class="form-control">
											<option value="1">Level 1</option>
											<option value="2">Level 2</option>
											<option value="3">Level 3</option>
											<option value="4">Level 4</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="phone">Phone</label>
										<input type="number" name="phone" class="form-control" placeholder="Type here ..." value="<?php echo $std_me->phone; ?>" required />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<label for="email">Email</label>
										<input type="email" name="email" class="form-control" placeholder="Type here ..." value="<?php echo $std_me->email; ?>" required />
									</div>
									<div class="col-sm-6">
										<label for="name">Password</label>
										<input type="password" name="password" class="form-control" placeholder="Type here ..." value="<?php echo $std_me->password; ?>" required />
									</div>
								</div>
							</div>
							<button class="btn btn-info" naame="udate" >Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<?php include('common_footer.php'); ?>
	</body>
</html>