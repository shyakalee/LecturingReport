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
		<?php include('leader_header.php');?>
		<div class="container">
			<div class="row dash-section">
				<?php include('leader_left.php');?>
				<div class="col-sm-9">
					<div class="thumbnail box-shadow">
						<h3 class="header-text">Post something here</h3>
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
						<form method="post" action="<?php echo base_url('Leader/add/'.$one_announce->id) ?>" role="form">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label for="image">Send to</label>
										<select class="form-control" name="send_to">
											<option value=5>To All</option>
											<option value="1">Level 1</option>
											<option value="2">Level 2</option>
											<option value="3">Level 3</option>
											<option value="4">Level 4</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="image">Title</label>
										<input type="text" name="title" Value="<?php echo $one_announce->title; ?>" placeholder="Type here ..." class="form-control" required />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="post">Content</label>
								<textarea rows="5" name="content" class="form-control" placeholder="Type here ..." required ><?php echo $one_announce->content; ?></textarea>
							</div>
							<button name="add" class="btn btn-info">Post</button>
						</form>
					</div>
					<?php
						include($read_more);
					?>
					<div class="thumbnail box-shadow">
						<h3>Announcement list</h3>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
									<th>To</th>
									<th>Title</th>
									<th>date</th>
									<th>action</th>
								</thead>
								<tbody>
									<?php
										if(count($all_announce)>0){
											$i=1;
											foreach($all_announce as $row){
												if($row->level == 5){$show = 'All levels';}else{$show = $row->level;}
												echo'
												<tr>
													<td>'.$i++.'</td>
													<td>'.$show.'</td>
													<td>'.$row->title.'</td>
													<td>'.$row->date_time.'</td>
													<td><a href="'.base_url('Leader/edit_announce/'.$row->id).'" class="btn btn-info btn-xs">update</a>
													<a href="'.base_url('Leader/delete_announce/'.$row->id).'" class="btn btn-danger btn-xs">delete</a>
													<a href="'.base_url('Leader/announce_details/'.$row->id).'" class="btn btn-warning btn-xs">more</a></td>
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