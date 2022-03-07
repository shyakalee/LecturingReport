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
										<p class="text-center"><span class="glyphicon glyphicon-tags gly1 text-success"></span> <span class="gly1"> <?php echo $lecturing_no; ?></span></p>
									</div>
									<div class="page-footer">
										<p class="text-center"><a href="<?php echo base_url('Student/post_list')?>">see</a></p>
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
										<p class="text-center"><a href="<?php echo base_url('Student/course_list')?>">see</a></p>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumbnail box-shadow">
									<div class="page-header">
										<h4 class="header-text text-center">Announcement</h4>
									</div>
									<div class="page-body">
										<p class="text-center"><span class="glyphicon glyphicon-info-sign gly1 text-success"></span> <span class="gly1"> <?php echo $anou_no; ?></span></p>
									</div>
									<div class="page-footer">
										<p class="text-center"><a href="<?php echo base_url('Student/announcement')?>">see</a></p>
									</div>
								</div>
							</div>
						</div>
						<h3>Last Announcement</h3>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
									<th>From</th>
									<th>Title</th>
									<th>Date and Time</th>
									<th>Action</th>
								</thead>
								<tbody>
									<?php
										$std_level = $this->session->userdata('TheLevel');
										if(count($all_announce)>0){
											$i=1;
											foreach($all_announce as $row){
												if($row->level == $std_level || $row->level == 5){
													echo'
												<tr>
													<td>'.$i++.'</td>
													<td>'.$row->f_name.' '.$row->l_name.'</td>
													<td>'.$row->title.'</td>
													<td>'.$row->date_time.'</td>
													<td><a href="'.base_url('Student/see_announce/'.$row->anou_id).'" class="btn btn-info btn-xs">more</a></td>
												</tr>';
												}
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