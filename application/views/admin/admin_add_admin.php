<?php
	$sms = $this->session->flashdata('sms');
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
						<h4 class="header-text text-center">Add a System user <span class="glyphicon glyphicon-user"></span></h4>
						<?php if($sms): ?>
							<div class="alert alert-success">
								<span class="glyphicon glyphicon-ok"></span> <?php echo $sms;?>
							</div>
						<?php endif;?>
						<form method="post" action="<?php echo base_url('Add_admin/add/'.$user_info->id) ?>" role="form">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<label for="name">First name</label>
										<input type="text" name="fname" value="<?php echo $user_info->f_name ?>" class="form-control" placeholder="Type here ..." required />
									</div>
									<div class="col-sm-6">
										<label for="name">Last name</label>
										<input type="text" name="lname" value="<?php echo $user_info->l_name ?>" class="form-control" placeholder="Type here ..." required />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<label for="id">Phone</label>
										<input type="number" name="phone" value="<?php echo $user_info->phone ?>" class="form-control" placeholder="Type here ..." required />
									</div>
									<div class="col-sm-6">
										<label for="id">E-mail</label>
										<input type="email" name="email" value="<?php echo $user_info->email ?>" class="form-control" placeholder="Type here ..." required />
									</div>
								</div>
							</div>
							<button name="add" class="btn btn-info">Add user</button>
						</form>
					</div>
					<div class="thumbnail box-shadow">
						<h4 class="text-center">First 5 added user in last time</h4>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
									<th>Admin name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>action</th>
								</thead>
								<tbody>
									<?php
										if(count($all_users)>0){
											$i = 0;
											foreach ($all_users as $user){
												$i++;
												echo'<tr>
														<td>'.$i.'</td>
														<td>'.$user->f_name.' '.$user->l_name.'</td>
														<td>'.$user->email.'</td>
														<td>'.$user->phone.'</td>
														<td><a href="'.base_url('Add_admin/edit/'.$user->id).'" class="btn btn-info btn-xs">edit</a> <a href="'.base_url('Add_admin/delete/'.$user->id).'" class="btn btn-info btn-xs">delete</a></td>
													</tr>';
											}
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php include('common_footer.php'); ?>
	</body>
</html>