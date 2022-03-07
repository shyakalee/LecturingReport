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
						<h3>List of Lesson learned</h3>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover display" id="students"> <!-- hover -->
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
													<td><a href="'.base_url('Student/post_details/'.$row_le->l_id).'" class="btn btn-info btn-xs">more</a> <a href="'.base_url('Student/delete/'.$row_le->l_id).'" class="btn btn-info btn-xs">delete</a></td>
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
				$('#students').DataTable( {
					dom: 'Bfrtip',
					buttons: [
						{
							extend: 'print',
							messageTop: 'ALL STUDENTS AVAILABLE',
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