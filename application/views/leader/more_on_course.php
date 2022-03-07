<div class="thumbnail box-shadow">
	<h3 class="text-center">Level <?php echo $one_cors->level; ?></h3>
		<div class="row">
			<div class="col-sm-6">
				<h4 class="bg-primary text-center">Student</h4>
				<p><b>Name: </b><?php echo $one_cors->std_fname.' '.$one_cors->std_lname; ?></p>
				<p><b>Email: </b><?php echo $one_cors->std_email; ?></p>
				<p><b>Phone: </b><?php echo $one_cors->std_phone; ?></p>
			</div>
			<div class="col-sm-6">
				<h4 class="bg-primary text-center">Lecture</h4>
				<p><b>Name: </b><?php echo $one_cors->degree.' '.$one_cors->le_fname.' '.$one_cors->le_lname; ?></p>
				<p><b>Email: </b><?php echo $one_cors->le_email; ?></p>
				<p><b>Phone: </b><?php echo $one_cors->le_phone; ?></p>
			</div>
		</div>
		<h4 class="bg-primary text-center">Course</h4>
		<p><b>Name: </b><?php echo $one_cors->name; ?></p>
		<p><b>Credit: </b><?php echo $one_cors->credit; ?></p>
		<a href="<?php echo base_url('Leader/depart') ?>" class="btn btn-danger btn-xs">Close <span class="glyphicon glyphicon-remove"></span></a>
		<?php $level_chosen = $one_cors->level?>
</div>