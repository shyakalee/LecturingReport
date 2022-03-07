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
					<?php include($more_on_lecturing);?>
					<div class="thumbnail box-shadow">
						<div class="row">
							<div class="col-sm-6">
								<h3>List of lesson learned</h3>
							</div>
							<div class="col-sm-6">
								<form class="form-inline pull-right" method="post" action="<?php echo base_url('Leader/print_lecturing') ?>" role="form">
									<div class="form-group">
										 
										<div class="row">
											<div class="col-sm-2">
												<label for="name">Print:</label>
											</div>
											<div class="col-sm-3">
												<select class="form-control" name="d">
													<option value="">DD</option>
													<?php
														for($i=1; $i<=31; $i++){ 
															if($i < 10){
																echo'<option value="0'.$i.'">0'.$i.'</option>';
															}else{
																echo'<option value="'.$i.'">'.$i.'</option>';
															}
														}
													?>
												</select>
											</div>
											<div class="col-sm-3">
												<select class="form-control" name="m">
													<option value="">MM</option>
													<?php
														for($i=1; $i<=12; $i++){ 
															if($i < 10){
																echo'<option value="0'.$i.'">0'.$i.'</option>';
															}else{
																echo'<option value="'.$i.'">'.$i.'</option>';
															}
														}
													?>
												</select>
											</div>
											<div class="col-sm-4">
												<select class="form-control" name="y">
													<option value="">YYYY</option>
													<?php
														$start_y = date('Y');
														$limit_y = date('Y', strtotime($start_y. ' - 10 years'));
														//echo'<option>'.$limit_y.'</option>';
														for($i=$start_y; $i>=$limit_y; $i--){
															echo'<option value="'.$i.'">'.$i.'</option>';
														}
													?>
												</select>
											</div>
										</div>
                                    </div>
                                    <button type="submit" class="btn btn-info">
                                        <i class="glyphicon glyphicon-print"></i>
                                    </button>
                                </form>
							</div>
						</div>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
									<th>Level</th>
									<th>Course</th>
									<th>date-time</th>
									<th>duration</th>
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
													<td>'.$row->c_name.'</td>
													<td>'.$row->date_time.'</td>
													<td>'.$row->duration.'</td>
													<td><a href="'.base_url('Leader/one_lecturing/'.$row->l_id).'" class="btn btn-warning btn-xs">more</a></td>
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
		
		<!-- bootstrap files -->
		<?php include('common_footer.php'); ?>
	</body>
</html>