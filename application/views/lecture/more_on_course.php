<div class="thumbnail box-shadow">
	<a href="<?php echo base_url('Lecture/course_list') ?>" class="btn btn-danger btn-xs pull-right">Close <span class="glyphicon glyphicon-remove"></span></a>
	<h4 class="text-center">More details on Course</h4>
	<p><b>Course: </b><?php echo $one_cour->name; ?></p>
	<p><b>Credit: </b><?php echo $one_cour->credit; ?></p>
	<p><b>Student Name: </b><?php echo $one_cour->f_name.' '.$one_cour->l_name; ?></p>
	<p><b>Student E-mail: </b><?php echo $one_cour->email; ?></p>
	<p><b>Student Phone: </b><?php echo $one_cour->phone; ?></p>
</div>