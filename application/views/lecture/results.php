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
					<div class="thumbnail box-shadow">
						<h3>Attended Students</h3>
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
									<th>Reg number</th>
									<th>Names</th>	
                                    <th>Date</th>
                                    <th>Status</th>									
								</thead>
								<tbody>
									<?php
										if(count($dates)>0){
											$i=1;
											foreach($dates as $row_le){
                                                ?>
												
												<tr>
													<td><?php echo $i++ ?></td>
													<td><?php echo $row_le->reg_number ?> </td>
													<td><?php echo $row_le->f_name.' '.$row_le->l_name ?></td>
                                                    <td><?php echo $row_le->in_time ?> </td>

                                                    <td><?php  if($row_le->status=='0') {
														echo 'Absent' ;
													} else if($row_le->status=='1') {
														echo 'Present' ;
													} else {
														echo 'Late';
													}?> </td> 
													
												</tr>
                                                <?php
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