<div class="thumbnail box-shadow">
	<h3 class="text-center">More details on Course</h3>
	<?php if($one_anc->level == 5){$show = 'All levels';}else{$show = $row->level;} ?>
	<p><b>Send to: </b><?php echo $show; ?></p>
	<p><b>Title: </b><?php echo $one_anc->title; ?></p>
	<p><b>Content: </b><br><?php echo $one_anc->content; ?></p>
	<p><b>Date and time: </b><?php echo $one_cour->date_time; ?></p>
	<a href="<?php echo base_url('Leader/edit_announce/'.$one_anc->id) ?>" class="btn btn-info btn-xs">update</a>
	<a href="<?php echo base_url('Leader/delete_announce/'.$one_anc->id) ?>" class="btn btn-warning btn-xs">delete</a>
	<a href="<?php echo base_url('Leader/announce') ?>" class="btn btn-danger btn-xs">Close <span class="glyphicon glyphicon-remove"></span></a>
</div>