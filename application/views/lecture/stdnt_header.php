<?php
	$userId = $this->session->userdata('User_Id');
	$User_degree = $this->session->userdata('User_degree');
	$fname = $this->session->userdata('User_Fname');
	$lname = $this->session->userdata('User_Lname');
	$TheDepart = $this->session->userdata('TheDepart_name');
	$TheUser_Type = $this->session->userdata('TheUser_Type');
?>
<nav class="navbar navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle button-color" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="<?php echo base_url('Lecture')?>" class="navbar-brand"><h4 style="margin-top: 0;"><span class="glyphicon glyphicon-education"></span> Online Lecturing Monitoring System</h4></a>
		</div>
		<div class="navbar-collapse collapse" id="navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="<?php echo base_url('Lecture')?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="<?php echo base_url('Lecture/lecturing_list')?>"><span class="glyphicon glyphicon-list-alt"></span> Lecturing</a></li>
				<li><a href="<?php echo base_url('Lecture/attendance')?>"><span class="glyphicon glyphicon-list-alt"></span> Add attendance</a></li>
				<li><a href="<?php echo base_url('Lecture/course_list')?>"><span class="glyphicon glyphicon-list-alt"></span> Courses</a></li>
				<li><a href="<?php echo base_url('Lecture/student_list')?>"><span class="glyphicon glyphicon-list-alt"></span> Students</a></li>
				<li><a href="<?php echo base_url('attendance/attendance_report')?>"><span class="glyphicon glyphicon-list-alt"></span> Att. Report</a></li>
				<li class="dropdown user-dialog"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"> </span> <?php echo $User_degree.' '.$fname; ?></a>
					<ul class="dropdown-menu">
						<li class="user-header text-center">
							<img src="<?php echo base_url('assets/images/peoples/user-m.png')?>" class="img-responsive img-circle profile" alt="User Image"/>
							<p>Lecture<br /><?php echo $User_degree.' '.$fname.' '.$lname; ?></p>
						</li>
						<li class="user-footer">
							<div class="pull-left">
								<a href="<?php echo base_url('Lecture/settings')?>" class="btn btn-default btn-flat">Profile</a>
							</div>
							<div class="pull-right">
								<a href="<?php echo base_url('Login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>