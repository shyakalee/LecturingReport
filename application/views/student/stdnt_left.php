<div class="col-sm-3">
	<div class="thumbnail box-shadow">
		<div class="page-header">
			<h3 class="text-center">Student</h3>
			<img src="<?php echo base_url('assets/images/peoples/user-m.png')?>" class="img-responsive" style="margin:auto;width:150px"/>
		</div>
		<p class="text-primary">Name: <?php echo $fname.' '.$lname; ?></p>
		<!--<p class="text-primary">Facult: <?php //echo $std_me_look->name; ?></p> -->
		<p class="text-primary">Level <?php echo $TheLevel; ?></p>
		<p class="text-primary">Depart <?php echo $TheDepart; ?></p>
	</div>
	<div class="list-group box-shadow">
		<a href="<?php echo base_url('Student/settings')?>" class="list-group-item"><span class="glyphicon glyphicon-cog"></span> Settings</a>
		<a href="<?php echo base_url('Login/logout')?>" class="list-group-item"><span class="glyphicon glyphicon-off"></span> Logout</a>
	</div>
</div>