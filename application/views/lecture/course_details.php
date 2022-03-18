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

				<form method="post" action="<?php echo base_url('Notifications/add_schedule/') ?>" role="form">

					<?php include($read_more); ?>
					<div class="thumbnail box-shadow">
						<h4 class="header-text text-center">Add a Schedule Type <span class="glyphicon glyphicon-pencil"></span></h4>
						<?php if($sms_good): ?>
							<div class="alert alert-success">
								<span class="glyphicon glyphicon-ok"></span> <?php echo $sms_good;?>
							</div>
						<?php endif; ?>
						
							<div class="form-group">
								<div class="row">
									<div class="col-sm-5">
										<label for="name">Type</label>
										<select class="form-control" name="schedule_type">									
											<option value="none">*** Select ***</option>
											<option value="exam">Examination</option>
											<option value="cat">Cat</option>												
										</select>
									</div>
									<div class="col-sm-4">
										<label for="name">Pick Date</label>
										<input type="date" name="schedule_date" min="" value="" class="form-control" required />
										
									</div>
									<div class="col-sm-3">
										<label for="name">Levels</label>
										<select class="form-control" readonly name="level">
											<option value="<?php echo $one_cour->c_level; ?>"><?php echo $one_cour->c_level; ?></option>
										</select>
									</div>
									
								</div>
							</div>

							<label for="post">More Details</label>
								<textarea rows="4" name="comments" class="form-control" placeholder="Type here ..." required ></textarea><p></p>
			
							<button class="btn btn-info" name="add">Submit Schedule</button>						
					</div>

						</form>
				</div>
			</div>
		</div>
		
		<?php include('common_footer.php'); ?>
	</body>
</html>