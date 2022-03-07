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
					<div class="thumbnail box-shadow">
						<h3>Lectures list</h3>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
									<th>Lecture</th>
									<th>Phone</th>
									<th>E-mail</th>
								</thead>
								<tbody>
									<?php
										if(count($all_lecture)>0){
											$i=1;
											foreach($all_lecture as $row){
												echo'
												<tr>
													<td>'.$i++.'</td>
													<td>'.$row->degree.' '.$row->f_name.' '.$row->l_name.'</td>
													<td>'.$row->phone.'</td>
													<td>'.$row->email.'</td>
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