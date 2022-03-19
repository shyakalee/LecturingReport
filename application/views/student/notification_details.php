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
						<h3>Notification Details</h3>
						<div class="table-responsive table-full-width form-add-project">

                        <div class="thumbnail box-shadow">
                        <?php
								if(count($notif_details)>0){
									$i=1;
									foreach($notif_details as $notification){
								?>
                            <p><b>Lecture: </b><?php echo $notification->lecture_name. " " .$notification->lecture_lname ?></p>
                            <p><b>Course: </b><?php echo $notification->course_name; ?></p>
                            <p><b>Level: </b><?php echo $notification->level_id." / " . $notification->depart_name; ?></p>
                            <p><b>Type: </b><?php echo $notification->type; ?></p>
                            <p><b>Scheduled on: </b><?php echo $notification->schedule ?></p>
                            <p><b>Message/ Comment: </b><?php echo $notification->comment; ?></p>
                            <a href="<?php echo base_url('Student/course_list') ?>" class="btn btn-danger btn-xs">Close <span class="glyphicon glyphicon-remove"></span></a>
                        <?php } } ?>
                        </div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php include('common_footer.php'); ?>
	</body>
</html>