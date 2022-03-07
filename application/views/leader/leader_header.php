<?php
	$userId = $this->session->userdata('User_Id');
	$fname = $this->session->userdata('User_Fname');
	$lname = $this->session->userdata('User_Lname');
	$TheDepart = $this->session->userdata('TheDepart');
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
			<a href="<?php echo base_url('Leader')?>" class="navbar-brand"><h4 style="margin-top: 0;"><span class="glyphicon glyphicon-education"></span> Online Lecturing Monitoring System</h4></a>
		</div>
		<div class="navbar-collapse collapse" id="navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="<?php echo base_url('Leader')?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="<?php echo base_url('Leader/announce')?>"><span class="glyphicon glyphicon-plus"></span> post Ancounce</a></li>
				<li><a href="<?php echo base_url('Leader/lecturing_posted')?>"><span class="glyphicon glyphicon-list-alt"></span> Lecturing posted</a></li>
				<li><a href="<?php echo base_url('Leader/depart')?>"><span class="glyphicon glyphicon-home"></span> My depart</a></li>
				<li><a href="<?php echo base_url('Leader/lecture_list')?>"><span class="glyphicon glyphicon-list-alt"></span> Lecture list</a></li>
				<li class="dropdown user-dialog"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"> </span> <?php echo $fname; ?></a>
					<ul class="dropdown-menu">
						<li class="user-header text-center">
							<img src="<?php echo base_url('assets/images/peoples/user-m.png')?>" class="img-responsive img-circle profile" alt="User Image"/>
							<p>Leader<br /><?php echo $fname.' '.$lname; ?></p>
						</li>
						<li class="user-footer">
							<div class="pull-left">
								<a href="<?php echo base_url('Leader/settings')?>" class="btn btn-default btn-flat">Profile</a>
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