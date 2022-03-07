<div class="thumbnail box-shadow">
	<h4><i><?php echo $one_anou->date_time; ?></i><br><br><u>From Leader: <?php echo $one_anou->f_name.' '.$one_anou->l_name; ?></u></h4><hr>
	<p>Dear Cps<br><?php echo $one_anou->content; ?></p>
	<a href="<?php echo base_url('Student/announcement') ?>" class="btn btn-danger btn-xs">Close <span class="glyphicon glyphicon-remove"></span></a>
</div>