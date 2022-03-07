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
						<h3>List of Student</h3>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Level</th>
								</thead>
								<tbody>
									<?php
										if(count($all_student)>0){
											$i=1;
											foreach($all_student as $row){
												echo'
												<tr>
													<td>'.$i++.'</td>
													<td>'.$row->f_name.' '.$row->l_name.'</td>
													<td>'.$row->email.'</td>
													<td>'.$row->phone.'</td>
													<td>'.$row->level.'</td>
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