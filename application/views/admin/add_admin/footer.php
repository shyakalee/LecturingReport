<div class="thumbnail box-shadow">
						<h4 class="text-center">First 5 added user in last time</h4>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
									<th>Admin name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>action</th>
								</thead>
								<tbody>
									<?php
										if(count($all_users)>0){
											$i = 0;
											foreach ($all_users as $user){
												$i++;
												echo'<tr>
														<td>'.$i.'</td>
														<td>'.$user->f_name.' '.$user->l_name.'</td>
														<td>'.$user->email.'</td>
														<td>'.$user->phone.'</td>
														<td><a href="'.base_url('Add_admin/edit/'.$user->id).'" class="btn btn-info btn-xs">edit</a> <a href="'.base_url('Add_admin/delete/'.$user->id).'" class="btn btn-info btn-xs">delete</a></td>
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
		
		<!-- bootstrap files -->
		<script src="<?php echo base_url('assets/js/jquery-1.10.2.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	</body>
</html>