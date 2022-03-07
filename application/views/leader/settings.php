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
		<?php include('leader_header.php');?>
		<div class="container">
			<div class="row dash-section">
				<?php include('leader_left.php');?>
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
						<form method="post" action="<?php echo base_url('Leader/edit_me') ?>" role="form">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<label for="name">First name</label>
										<input type="text" name="fname" value="<?php echo $leader_me->f_name; ?>" class="form-control" placeholder="Type here ..." required />
									</div>
									<div class="col-sm-6">
										<label for="name">Last name</label>
										<input type="text" name="lname" value="<?php echo $leader_me->l_name; ?>" class="form-control" placeholder="Type here ..." required />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<label for="gender">Phone</label>
										<input type="number" name="phone" value="<?php echo $leader_me->phone; ?>" class="form-control" placeholder="Type here ..." required />
									</div>
									<div class="col-sm-6">
										<label for="id">Depart</label>
										<input type="text" value="<?php echo $leader_me->name; ?>" class="form-control" disabled />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<label for="name">Email</label>
										<input type="email" name="email" value="<?php echo $leader_me->email; ?>" class="form-control" placeholder="Type here ..." required />
									</div>
									<div class="col-sm-6">
										<label for="name">Password</label>
										<input type="password" name="password" value="<?php echo $leader_me->password; ?>" class="form-control" placeholder="Type here ..." required />
									</div>
								</div>
							</div>
							<button name="edit_me" class="btn btn-info">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<?php include('common_footer.php'); ?>
	</body>
</html>