<div class="thumbnail box-shadow">
	<a href="<?php echo base_url('Lecture/lecturing_list') ?>" class="btn btn-danger btn-xs pull-right">Close <span class="glyphicon glyphicon-remove"></span></a>
	<h4 class="text-center">More info on this post</h4>
	<?php
		if($one_le->le_active == 4){
			echo'<div class="alert alert-success">Lecturing has sent to the leader.
			<span class="glyphicon glyphicon-send"></span> <span class="glyphicon glyphicon-saved"></span>
			</div>';
		}
	?>
	<p><b>Course: </b><?php echo $one_le->name; ?></p>
	<p><b>Student name: </b><?php echo $one_le->le_fname.' '.$one_le->le_lname; ?></p>
	<p><b>Student email: </b><?php echo $one_le->email; ?></p>
	<p><b>date-time: </b><?php echo $one_le->date_time; ?></p>
	<p><b>Duration: </b><?php echo $one_le->duration; ?></p>
	<p><b>Description: </b><br><?php echo $one_le->content; ?></p>
	<?php if($one_le->le_active == 1){?>
	<form method="post" action="<?php echo base_url('Lecture/lecturing_answer/'.$one_le->l_id) ?>" role="form">
		<div class="form-group">
			<div class="row">
				<div class="col-sm-8">
					<label for="email">Coment</label>
					<textarea class="form-control" name="comment" placeholder="Type something ..." required></textarea>
				</div>
				<div class="col-sm-4">
					<label class="radio-inline">
						<input type="radio" name="cmnt_type" value="2">Accept <span class="glyphicon glyphicon-thumbs-up text-success"></span>
					</label>
					<label class="radio-inline">
						<input type="radio" name="cmnt_type" value="3">Refuse <span class="glyphicon glyphicon-thumbs-down text-danger"></span>
					</label>
				</div>
			</div>
		</div>
		<button type="submit" name="answer" class="btn btn-default">Submit</button>
	</form>
	<?php 
		}
		if($one_le->le_active == 3){
			echo'<div class="alert alert-danger">Lecturing has been refused <span class="glyphicon glyphicon-thumbs-down"></span> !</div>';
		}
		if($one_le->le_active == 2){
			echo'<div class="alert alert-success">Lecturing has been accepted <span class="glyphicon glyphicon-thumbs-up"></span> !</div>';
		}
	?>
	
</div>