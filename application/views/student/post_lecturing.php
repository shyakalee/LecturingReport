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
					<div class="thumbnail box-shadow">
						<h4 class="header-text text-center">Post the Lecturing here!</h4>
						<?php if($sms_good): ?>
							<div class="alert alert-success">
								<span class="glyphicon glyphicon-ok"></span> <?php echo $sms_good;?>
							</div>
						<?php endif; ?>
						<?php if($sms_bad): ?>
							<div class="alert alert-danger">
								<span class="glyphicon glyphicon-remove"></span> <?php echo $sms_bad;?>
							</div>
						<?php endif; ?>
						<form method="post" action="<?php echo base_url('Student/add/'.$one_data->l_id) ?>" role="form">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="image">Course</label>
										<select class="form-control" name="course">
											<?php
												if(count($all_course)>0){
													foreach($all_course as $c_row){
														echo'<option value="'.$c_row->c_id.'">'.$c_row->name.'</option>';
													}
												}
											?>
										</select>
									</div>
									<div class="col-sm-4">
										<label for="image">Date - time</label>
										<input type="datetime-local" name="date_time" value="<?php echo $one_data->date_time; ?>" class="form-control" required />
									</div>
									<div class="col-sm-2">
										<label for="image">Duration eg: 2h</label>
										<input type="text" name="duration" value="<?php echo $one_data->duration; ?>" class="form-control" required />
									</div>
									<div class="col-sm-3">
										<div class="checkbox">
											<label><input type="checkbox" name="approval" required /><b>Lecture Approval</b></label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="post">More Details</label>
								<textarea rows="4" name="details" class="form-control" placeholder="Type here ..." required ><?php echo $one_data->content; ?></textarea>
							</div>
							
							<button name="add" class="btn btn-info">Post</button>
						</form>
					</div>
					<?php
						include($read_more);
					?>
					<div class="thumbnail box-shadow">
						<h4 class="header-text"> list of Lesson learned</h4>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover display" id="example"> <!-- hover -->
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
													<td><a href="'.base_url('Student/see_more/'.$row_le->l_id).'" class="btn btn-info btn-xs">more</a> <a href="'.base_url('Student/delete/'.$row_le->l_id).'" class="btn btn-info btn-xs">delete</a>
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
		<script>
			$(document).ready(function() {
				$('#example').DataTable( {
					dom: 'Bfrtip',
					buttons: [
						{
							extend: 'print',
							messageTop: 'ALL COURSES',
							exportOptions: {
								columns: ':visible'
							}
						},
						'colvis'
					],
					// columnDefs: [ {
					// 	targets: -1,
					// 	visible: false
					// } ]
				} );
			} );
		</script>
	</body>
</html>