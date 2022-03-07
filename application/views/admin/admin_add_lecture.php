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
						<h4 class="header-text text-center">Add a Lecture <span class="glyphicon glyphicon-user"></span></h4>
						<?php if($sms_good): ?>
							<div class="alert alert-success">
								<span class="glyphicon glyphicon-ok"></span> <?php echo $sms_good;?>
							</div>
						<?php endif; ?>
						<?php if($sms_bad): ?>
							<div class="alert alert-warning">
								<span class="glyphicon glyphicon-ok"></span> <?php echo $sms_bad;?>
							</div>
						<?php endif; ?>
						<form method="post" action="<?php echo base_url('Add_lecture/add/'.$one_lecture->id) ?>" role="form">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-2">
										<label for="name">Title</label>
										<select name="degree" class="form-control">
											<option value="Mr">Mr</option>
											<option value="Mrs">Mrs</option>
											<option value="Dr">Doctor</option>
											<option value="Prof">Professor</option>
										</select>
									</div>
									<div class="col-sm-4">
										<label for="name">First name</label>
										<input type="text" name="fname" class="form-control" value="<?php echo $one_lecture->f_name; ?>" placeholder="Type here ..." required />
									</div>
									<div class="col-sm-4">
										<label for="name">Last name</label>
										<input type="text" name="lname" class="form-control" value="<?php echo $one_lecture->l_name; ?>" placeholder="Type here ..." required />
									</div>
									<div class="col-sm-2">
										<label for="name">Gender</label>
										<select name="gender" class="form-control">
											<option value="M">Male</option>
											<option value="F">Female</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<label for="name">Departement</label>
										<select name="depart" class="form-control">
											<?php
												if(count($all_depart)>0){
													foreach($all_depart as $row){
														echo'<option value="'.$row->id.'">'.$row->name.'</option>';
													}
												}
											?>
										</select>
									</div>
									<div class="col-sm-4">
										<label for="name">Phone</label>
										<input type="number" name="phone" class="form-control" value="<?php echo $one_lecture->phone; ?>" placeholder="Type here ..." required />
									</div>
									<div class="col-sm-4">
										<label for="name">Email</label>
										<input type="email" name="email" class="form-control" value="<?php echo $one_lecture->email; ?>" placeholder="Type here ..." required />
									</div>
								</div>
							</div>
							<button name="add" class="btn btn-info">Save</button>
						</form>
					</div>
					<div class="thumbnail box-shadow">
						<h4 class="text-center">Lecture List</h4>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover display"  id="example"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
									<th>Title</th>
									<th>Lecture name</th>
									<th>Depart name</th>
									<th>Phone</th>
									<th>Email</th>
									<th>Gender</th>
									<th>action</th>
									<th>x</th>
								</thead>
								<tbody>
									<?php
										if(count($all_lecture)>0){
											$i=0;
											foreach($all_lecture as $le_row){
												$i ++;
												echo'
												<tr>
													<td>'.$i.'</td>
													<td>'.$le_row->degree.'</td>
													<td>'.$le_row->f_name.' '.$le_row->l_name.'</td>
													<td>'.$le_row->name.'</td>
													<td>'.$le_row->phone.'</td>
													<td>'.$le_row->email.'</td>
													<td>'.$le_row->gender.'</td>
													<td>
													<a href="'.base_url('Add_lecture/edit/'.$le_row->l_id).'" class="btn btn-info btn-xs">update</a> 
													</td>
													<td>
													<a href="'.base_url('Add_lecture/delete/'.$le_row->l_id).'"class="btn btn-info btn-xs">delete</a>
													</td>
												</tr>
												';
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
		<script>
			$(document).ready(function() {
				$('#example').DataTable( {
					dom: 'Bfrtip',
					buttons: [
						{
							extend: 'print',
							messageTop: 'ALL LECTURES AVAILABLE',
							exportOptions: {
								columns: ':visible'
							}
						},
						'colvis'
					],
					// columnDefs: [ {
					// 	targets: -1,
					// 	visible: false
					// } ]
				} );
			} );
		</script>
	</body>
</html>