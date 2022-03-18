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
					<?php include($read_more); ?>
					<div class="thumbnail box-shadow">
						<h3>List of Course</h3>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
									<th>Course</th>
									<th>Credit</th>
									<th>Level</th>
									<th>Action</th>
								</thead>
								<tbody>
									<?php
										if(count($all_course)>0){
											$i=1;
											foreach($all_course as $row_co){
												echo'
												<tr>
													<td>'.$i++.'</td>
													<td>'.$row_co->name.'</td>
													<td>'.$row_co->credit.'</td>
													<td>'.$row_co->level.'</td>
													<td><a href="'.base_url('Lecture/course_details/'.$row_co->c_id).'" class="btn btn-info btn-xs">Set Schedules</a></td>
												</tr>';
											}
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<!-- list of schedules recorded -->
				<div class="col-sm-9">
					<?php include($read_more); ?>
					<div class="thumbnail box-shadow">
						<h3>List of Schedules</h3>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
									<th>Course Title</th>
									<th>Sched.Type</th>
									<th>Level</th>
									<th>Scheduled on</th>
									<th>Status</th>									
								</thead>
								<tbody>
									<?php
										if(count($all_schedules)>0){
											$i=1;
											foreach($all_schedules as $schedule){
												  ?>
												<tr>
													<td><a href="#"><?php echo $i++ ?></a></td>
													<td><a href="#"><?php echo $schedule->course_name ?></a></td>
													<td><a href="#"><?php echo $schedule->type ?></a></td>
													<td><a href="#"><?php echo $schedule->level_id ?></a></td>
													<td><a href="#"><?php echo $schedule->schedule ?></a></td>
													<td><a href="#"><a href="#" class="badge">
													<?php
													$status='';
													if($schedule->schedule > date('Y-m-d')) {
														$status='Incoming';
													} else {
														$status='Overdue';}
													echo $status;  ?>
													</a>
													</td>													
												</tr>
										<?php	
										} }
										
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