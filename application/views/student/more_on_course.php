<div class="thumbnail box-shadow">
	<h4 class="text-center">More details on Course</h4>
	<p><b>Course: </b><?php echo $one_cour->name; ?></p>
	<p><b>Credit: </b><?php echo $one_cour->credit; ?></p>
	<p><b>Lecture Name: </b><?php echo $one_cour->degree.' '.$one_cour->f_name.' '.$one_cour->l_name; ?></p>
	<p><b>Lecture E-mail: </b><?php echo $one_cour->email; ?></p>
	<p><b>Lecture Phone: </b><?php echo $one_cour->phone; ?></p>
	<a href="<?php echo base_url('Student/course_list') ?>" class="btn btn-danger btn-xs">Close <span class="glyphicon glyphicon-remove"></span></a>
</div>