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
					
					<!-- End of attendance submission form here -->
                   
                    
				</div>
			</div>
		</div>
		
		<?php include('common_footer.php'); ?>
	</body>
</html>