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
						<h3>Search to get more</h3>
						<form method="post" action="<?php echo base_url('Leader/depart') ?>" role="form">
							<div class="row">
								<div class="col-sm-3">
									<div class="form-group">
										<label for="image">Choose</label>
										<select class="form-control" name="level_chosen">
											<option value="1">To Level 1</option>
											<option value="2">To Level 2</option>
											<option value="3">To Level 3</option>
											<option value="4">To Level 4</option>
										</select>
									</div>
								</div>
								<div class="col-sm-3"><br><button name="this_level" class="btn btn-info">Check</button></div>
							</div>
						</form>
					</div>
					<?php include($more_on_course); ?>
					<div class="thumbnail box-shadow">
						<h3>Level <?php if($level_chosen == ''){echo'1';}else{echo $level_chosen;}?> Courses list</h3>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
									<th>Course</th>
									<th>Lecture</th>
									<th>Credit</th>
									<th>action</th>
								</thead>
								<tbody>
									<?php
										if(count($my_level)>0){
											$i=1;
											foreach($my_level as $row){
												echo'
												<tr>
													<td>'.$i++.'</td>
													<td>'.$row->name.'</td>
													<td>'.$row->degree.' '.$row->f_name.' '.$row->l_name.'</td>
													<td>'.$row->credit.'</td>
													<td><a href="'.base_url('Leader/this_course/'.$row->c_id).'" class="btn btn-warning btn-xs">more</a></td>
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