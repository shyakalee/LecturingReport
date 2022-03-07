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
						<h4 class="header-text text-center">Add a Course <span class="glyphicon glyphicon-pencil"></span></h4>
						<?php if($sms_good): ?>
							<div class="alert alert-success">
								<span class="glyphicon glyphicon-ok"></span> <?php echo $sms_good;?>
							</div>
						<?php endif; ?>
						<form method="post" action="<?php echo base_url('Add_course/add/'.$one_course->id) ?>" role="form">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-5">
										<label for="name">Course</label>
										<input type="text" name="c_name" value="<?php echo $one_course->name; ?>" class="form-control" placeholder="Type here ..." required />
									</div>
									<div class="col-sm-4">
										<label for="name">Departement</label>
										<select class="form-control" name="c_depart">
											<?php
												if(count($all_depart)>0){
													foreach($all_depart as $one){
														echo'<option value="'.$one->id.'">'.$one->name.'</option>';
													}
												}
											?>
										</select>
									</div>
									<div class="col-sm-3">
										<label for="name">Levels</label>
										<select class="form-control" name="c_level">
											<option value="1">Level 1</option>
											<option value="2">Level 2</option>
											<option value="3">Level 3</option>
											<option value="4">Level 4</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-5">
										<label for="name">Lecture</label>
										<select class="form-control" name="c_lecture">
											<?php
												if(count($all_lecture)>0){
													foreach($all_lecture as $onele){
														echo'<option value="'.$onele->id.'">'.$onele->f_name.' '.$onele->l_name.'</option>';
													}
												}
											?>
										</select>
									</div>
									<div class="col-sm-3">
										<label for="name">Credit</label>
										<input type="number" name="c_credit" value="<?php echo $one_course->credit; ?>" class="form-control" placeholder="Type here ..." required />
									</div>
								</div>
							</div>
							<button class="btn btn-info" name="add">Save</button>
						</form>
					</div>
					<div class="thumbnail box-shadow">
						<h4 class="text-center">Course List</h4>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover display" id="example"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
									<th>Course</th>
									<th>Level</th>
									<th>Credit</th>
									<th>Lecture</th>
									<th>Depart name</th>									
									<th>action</th>
									<th>x</th>
								</thead>
								<tbody>
									<?php
										if(count($all_course) > 0){
											$i=1;
											foreach($all_course as $row){
												echo'<tr>
														<td>'.$i++.'</td>
														<td>'.$row->c_name.'</td>
														<td>'.$row->level.'</td>
														<td>'.$row->credit.'</td>
														<td>'.$row->f_name.' '.$row->l_name.'</td>
														<td>'.$row->d_name.'</td>
														<td>
														<a href="'.base_url('Add_course/edit/'.$row->c_id).'" class="btn btn-info btn-xs">update</a>
														</td>
														<td>
														<a href="'.base_url('Add_course/delete/'.$row->c_id).'" class="btn btn-info btn-xs">delete</a>															
														</td>
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
		<script>
			$(document).ready(function() {
				$('#example').DataTable( {
					dom: 'Bfrtip',
					buttons: [
						{
							extend: 'print',
							messageTop: 'ALL COURSES AVAILABLE',
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