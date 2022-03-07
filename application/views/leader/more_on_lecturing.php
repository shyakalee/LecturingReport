<div class="thumbnail box-shadow">
	<a href="<?php echo base_url('Leader/lecturing_posted') ?>" class="btn btn-danger btn-xs pull-right">Close <span class="glyphicon glyphicon-remove"></span></a>
	<h3 class="text-center">More this Lecturing Level <?php echo $one_lect->level; ?></h3>
	<div class="row">
		<div class="col-sm-6">
			<h4 class="bg-primary text-center">Student</h4>
			<p><b>Name: </b><?php echo $one_lect->std_fname.' '.$one_lect->std_lname; ?></p>
			<p><b>Email: </b><?php echo $one_lect->std_email; ?></p>
			<p><b>Phone: </b><?php echo $one_lect->std_phone; ?></p>
		</div>
		<div class="col-sm-6">
			<h4 class="bg-primary text-center">Lecture</h4>
			<p><b>Name: </b><?php echo $one_lect->degree.' '.$one_lect->le_fname.' '.$one_lect->le_lname; ?></p>
			<p><b>Email: </b><?php echo $one_lect->le_email; ?></p>
			<p><b>Phone: </b><?php echo $one_lect->le_phone; ?></p>
		</div>
	</div>
	<h4 class="bg-primary text-center">Course</h4>
	<p><b>Name: </b><?php echo $one_lect->name; ?></p>
	<p><b>Date-Time: </b><?php echo $one_lect->date_time; ?> / <b>Duration: </b><?php echo $one_lect->duration; ?></p>
	<p><b>Description: </b><br><?php echo $one_lect->content; ?></p>
	<p><b>Comment from Lecture: </b><br><?php echo $one_lect->comment; ?></p>
</div>