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
		<?php include('stdnt_header.php');?>
		<div class="container">
			<div class="row dash-section">
				<?php include('stdnt_left.php');?>
				<div class="col-sm-9">
					<?php include($read_more); ?>
                <!-- attendance submission form here-->

					<div class="thumbnail box-shadow">
						<h3>Attendance reports</h3>
						<?php
						if($date) {
							print_r($date);

						}
						?>
						<?php if($sms_good): ?>
							<div class="alert alert-success">
								<span class="glyphicon glyphicon-ok"></span> <?php echo $sms_good;?>
							</div>
						<?php endif; ?>
						<?php if($sms_bad): ?>
							<div class="alert alert-danger">
								<span class="glyphicon glyphicon-ok"></span> <?php echo $sms_bad;?>
							</div>
						<?php endif; ?>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover" id=example> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
                                    <th>Date of Attendance</th>
									<th>Students</th>
									

								</thead>
								<tbody>
                                <?php
										if(count($attendes)>0){
											$i=1;
											foreach($attendes as $attende){ ?>

											<tr>
													<td><a href="#" class="badge"></a><?php  echo $i++ ?></a></td>
                                                    <td><a href="#" class="badge"><?php  echo $attende->attend_time ?></a></td>
													<td><a href="#" class="badge"><?php  echo $attende->total ?></a></td>
												</tr> 
                                        <?php 	
                                        }
									} 
                                        ?>
								</tbody>
                                
							</table>
                            
						</div>
                        <button class="btn btn-info hidden" name="add">Submit Attendance</button>
					</div>


					<!-- ==================================================== -->
					
					<!-- End of attendance submission form here -->

					<div class="thumbnail box-shadow">
						<h3>Query Students</h3>
						

						<form method="post" action="<?php echo base_url('attendance/view_attendes/') ?>" role="form">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<label for="name">Date</label>
										<input type="date" name="attendance_date" value="" class="form-control" required />
									</div>
									<div class="col-sm-4">
										<label for="name">Course</label>
										<select name="depart" class="form-control">
											<?php
												if(count($all_courses)>0){
													foreach($all_courses as $course){
														echo'<option value="'.$course->id.'">'.$course->c_name.'</option>';
													}
												}
											?>
										</select>
									</div>
								</div>
							</div>
							
							<button name="send_values" class="btn btn-info">Submit Datas</button><p></p>
					
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover display"  id="example"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
                                    <th>Reg number</th>
									<th>Mames</th>
									<th>Date</th>		
									<th>Status</th>							
								</thead>
								<tbody>
                                <?php
										if(count($all_attendes)>0){
											$i=1;
											foreach($all_attendes as $attendee){ ?>

											<tr>
													<td><a href="#" class="badge"></a><?php  echo $i++ ?></a></td>
                                                    <td><a href="#" class=""><?php  echo $attendee->reg_number ?></a></td>
													<td><a href="#" class=""><?php  echo $attendee->f_name." ".$attendee->l_name ?></a></td>
													<td><a href="#" class=""><?php  echo $attendee->in_time ?></td>
													<td><a href="#" class="badge">
													<?php 
													if($attendee->status=='0') {
														echo 'Absent' ;
													} else if($attendee->status=='1') {
														echo 'Present' ;
													} else {
														echo 'Late';
													}
													  
													 ?></a></td>
												</tr> 
                                        <?php 	
                                        }
									} 
                                        ?>
								</tbody>                                
							</table>                            
						</div>

						</form>
                        
					</div>
                   
				</div>
			</div>
		</div>
		
		<?php include('common_footer.php'); ?>
	</body>
</html>