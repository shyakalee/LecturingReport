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
					<?php include($more_on_announce); ?>
					<div class="thumbnail box-shadow">
						<h3>Announcement list</h3>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
									<th>From</th>
									<th>Title</th>
									<th>Date and Time</th>
									<th>Action</th>
								</thead>
								<tbody>
									<?php
										$std_level = $this->session->userdata('TheLevel');
										if(count($all_announce)>0){
											$i=1;
											foreach($all_announce as $row){
												if($row->level == $std_level || $row->level == 5){
													echo'
												<tr>
													<td>'.$i++.'</td>
													<td>'.$row->f_name.' '.$row->l_name.'</td>
													<td>'.$row->title.'</td>
													<td>'.$row->date_time.'</td>
													<td><a href="'.base_url('Student/see_announce/'.$row->anou_id).'" class="btn btn-info btn-xs">more</a></td>
												</tr>';
												}
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