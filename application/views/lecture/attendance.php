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
						<h3>Lecturing</h3>
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
							<table class="table table-striped table-hover"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
                                    <th>Registration</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Phone</th>
									<th>Department</th>
                                    <th>Levels</th>
                                    <th>Attendance Record</th>
                                    
								</thead>
								<tbody>

									<?php
										if(count($students)>0){
											$i=1;
											foreach($students as $row_le){ ?>
											<form method="POST" action="<?php echo base_url('attendance/add_attendance/') ?>" role="form">
												<tr>
													<td><?php  echo $i++ ?></td>
                                                    <td><?php  echo $row_le->reg_number ?></td>
													<td><?php  echo $row_le->f_name ?></td>
													<td><?php  echo $row_le->l_name ?></td>
													<td><?php  echo $row_le->phone ?></td>											
                                                    <td><?php  echo $row_le->name ?></td>
                                                    <td><?php  echo $row_le->level ?></td>
													<td>
														<select name="attendance_record">
															<option value="1">Present</option>
															<option value="0">Absent</option>
															<option value="2">Late</option>
														</select>

													
														<input type="submit" class="" name="save_attendance" value="send"> 
														

                                                    <!-- <label class="block"><input type="radio" name="attendance[<?php echo $row_le->reg_number ?>]" value="A"> Present  </label>
                                                    <label class="block"><input type="radio" name="attendance[<?php echo $row_le->reg_number ?>]" value="B"> Absent </label>
                                                    <label class="block"><input type="radio" name="attendance[<?php echo $row_le->reg_number ?>]" value="C"> Late</label> -->
                                                    </td>
												</tr>

												<!-- User values to pass to db -->
												
												<input type="hidden" name="reg_number" value="<?php echo $row_le->reg_number; ?>"/>
												<input type="hidden" name="lecture_id" value="<?php echo $this->session->userdata('User_Id'); ?>"/>
												<input type="hidden" name="depart" value="<?php echo $this->session->userdata('TheDepart')?>"/>
												<input type="date" class="hidden" id="in_time_attendance" name="in_time" value="<?php echo date('Y-m-d'); ?>"/>

												</form>
	
									<?php 	
                                        }
									} 
                                        ?>
										 
								</tbody>
                                
							</table>
                            
						</div>
                        <button class="btn btn-info hidden" name="add">Submit Attendance</button>
					</div>
					
					<!-- End of attendance submission form here -->
                   
                    
				</div>
			</div>
		</div>
		
		<?php include('common_footer.php'); ?>
	</body>
</html>