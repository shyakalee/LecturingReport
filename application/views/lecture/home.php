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
						<h3 class="text-center">Summarized updates here</h3>
						<div class="row">
							<div class="col-sm-3">
								<div class="thumbnail box-shadow">
									<div class="page-header">
										<h4 class="header-text text-center">Posted lecturing</h4>
									</div>
									<div class="page-body">
										<p class="text-center"><span class="glyphicon glyphicon-tags gly1 text-success"> </span> <span class="gly1"> <?php echo $lecturing_no; ?></span></p>
									</div>
									<div class="page-footer">
										<p class="text-center"><a href="<?php echo base_url('Lecture')?>">see</a></p>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumbnail box-shadow">
									<div class="page-header">
										<h4 class="header-text text-center">Course</h4>
									</div>
									<div class="page-body">
										<p class="text-center"><span class="glyphicon glyphicon-book gly1 text-success"></span> <span class="gly1"> <?php echo $course_no; ?></span></p>
									</div>
									<div class="page-footer">
										<p class="text-center"><a href="<?php echo base_url('Lecture')?>">see</a></p>
									</div>
								</div>
							</div>
						</div>
						<h3>Last Lecturing posted</h3>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
									<th>Level</th>
									<th>Course</th>
									<th>Date-Time</th>
									<th>Duration</th>
									<th>action</th>
								</thead>
								<tbody>
									<?php
										if(count($all_lecturing)>0){
											$i=1;
											foreach($all_lecturing as $row){
												echo'
												<tr>
													<td>'.$i++.'</td>
													<td>'.$row->level.'</td>
													<td>'.$row->name.'</td>
													<td>'.$row->date_time.'</td>
													<td>'.$row->duration.'</td>
													<td><a href="'.base_url('Lecture/lecturing_details/'.$row->l_id).'" class="btn btn-warning btn-xs">more</a></td>
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