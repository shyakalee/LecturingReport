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
									<th>course</th>
									<th>lecture</th>
									<th>date-time</th>
									<th>duration</th>
									<th>action</th>
								</thead>
								<tbody>
									<?php
										if(count($all_lecturing)>0){
											$i=1;
											foreach($all_lecturing as $row_le){
												echo'
												<tr>
													<td>'.$i++.'</td>
													<td>'.$row_le->name.'</td>
													<td>'.$row_le->degree.' '.$row_le->le_fname.' '.$row_le->le_lname.'</td>
													<td>'.$row_le->date_time.'</td>
													<td>'.$row_le->duration.'</td>
													<td><a href="'.base_url('Lecture/lecturing_details/'.$row_le->l_id).'" class="btn btn-info btn-xs">more</a></td>
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