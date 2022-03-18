<div class="thumbnail box-shadow">
	<a href="<?php echo base_url('Lecture/course_list') ?>" class="btn btn-danger btn-xs pull-right">Close <span class="glyphicon glyphicon-remove"></span></a>
	<h4 class="text-center">More details on Course</h4>
	<p><b>Course Title: </b><?php echo $one_cour->c_name. ' ['.$one_cour->c_id.']'; ?></p>
	<p><b>Credit: </b><?php echo $one_cour->c_credit; ?></p>
	<p><b>Study in: Level </b><?php echo $one_cour->c_level; ?></p>
	<p style="color:red"><b style="color:red">Period: </b><?php echo $one_cour->start. "__" .$one_cour->end; ?></p>

</div>

<input type="date"  class="hidden" name="schedule_date" min="" value="" />
<input type="text" class="hidden"  name="course_id" min="" value="<?php echo $one_cour->c_id;?>"  />
<input type="date"  class="hidden" name="schedule_date" min="" value=""  />

