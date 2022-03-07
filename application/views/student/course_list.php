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
									<th>Lecture</th>
									<th>Credit</th>
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
													<td>'.$row_co->degree.' '.$row_co->f_name.' '.$row_co->l_name.'</td>
													<td>'.$row_co->credit.'</td>
													<td><a href="'.base_url('Student/course_details/'.$row_co->c_id).'" class="btn btn-info btn-xs">more</a>
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