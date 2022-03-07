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

                <form method="POST" action="<?php echo base_url('Lecture/process_attendance/') ?>" role="form">
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
											
												<tr>
													<td><?php  echo $i++ ?></td>
                                                    <td><?php  echo $row_le->reg_number ?></td>
													<td><?php  echo $row_le->f_name ?></td>
													<td><?php  echo $row_le->l_name ?></td>
													<td><?php  echo $row_le->phone ?></td>											
                                                    <td><?php  echo $row_le->name ?></td>
                                                    <td><?php  echo $row_le->level ?></td>
													<td>
                                                    <label class="block"><input type="radio" name="attendance[<?php echo $row_le->reg_number ?>]" value="A"> Present  </label>
                                                    <label class="block"><input type="radio" name="attendance[<?php echo $row_le->reg_number ?>]" value="B"> Absent </label>
                                                    <label class="block"><input type="radio" name="attendance[<?php echo $row_le->reg_number ?>]" value="C"> Late</label>
                                                    </td>
												</tr>
									<?php 	
                                        }
									} 
                                        ?>
								</tbody>
                                
							</table>
                            
						</div>
                        <button class="btn btn-info" name="add">Submit Attendance</button>
					</div>
                    <input type="hidden" name="reg_number" value="<?php $row_le->reg_number; ?>"/>
                    <input type="hidden" name="lecture_id" value="1"/>
                    <input type="hidden" name="depart" value="1"/>
                    <input type="hidden" name="in_time" value="1"/>

                    </form>
                    
				</div>
			</div>
		</div>
		
		<?php include('common_footer.php'); ?>
	</body>
</html>