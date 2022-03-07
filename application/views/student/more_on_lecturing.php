<div class="thumbnail box-shadow">
	<a href="<?php echo base_url('Student/post_lecturing') ?>" class="btn btn-danger btn-xs pull-right">Close <span class="glyphicon glyphicon-remove"></span></a>
	<h4 class="text-center">More info on this post</h4>
	<?php 
		if($one_le->le_active == 3){
			echo'<div class="alert alert-danger">Lecturing has been refused <span class="glyphicon glyphicon-thumbs-down"></span> ! <a href="'. base_url('Student/edit_lecturing/'.$one_le->l_id) .'" class="btn btn-info btn-xs">update</a> or 
			<a href="'. base_url('Student/delete/'.$one_le->l_id) .'" class="btn btn-warning btn-xs">delete</a> </div>';
		}else if($one_le->le_active == 2){
			echo'<div class="alert alert-success">
				Lecturing has been accepted <span class="glyphicon glyphicon-thumbs-up"></span> ! you can 
				<a href="'. base_url('Student/send_lecturing/'.$one_le->l_id) .'" class="btn btn-info btn-xs">Send</a> it to the leader.
			</div>';
		}else if($one_le->le_active == 4){
			echo'<div class="alert alert-success">
				Lecturing has been sent to the leader.
				<span class="glyphicon glyphicon-send"></span> <span class="glyphicon glyphicon-saved"></span>
			</div>';
		}else{
			echo'<div class="alert alert-warning">
				Lecturing not yet seen by the lecture <span class="glyphicon glyphicon-refresh"></span> ! you can <a href="'. base_url('Student/edit_lecturing/'.$one_le->l_id) .'" class="btn btn-info btn-xs">update</a>
				<a href="'. base_url('Student/delete/'.$one_le->l_id) .'" class="btn btn-warning btn-xs">delete</a> it or not...
			</div>';
		}
	?>
	<p><b>Course: </b><?php echo $one_le->name; ?></p>
	<p><b>lecture name: </b><?php echo $one_le->degree.' '.$one_le->le_fname.' '.$one_le->le_lname; ?></p>
	<p><b>lecture email: </b><?php echo $one_le->email; ?></p>
	<p><b>date-time: </b><?php echo $one_le->date_time; ?></p>
	<p><b>Duration: </b><?php echo $one_le->duration; ?></p>
	<p><b>Description: </b><br><?php echo $one_le->content; ?></p>
</div>