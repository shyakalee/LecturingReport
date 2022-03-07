<?php
	$sms = $this->session->flashdata('sms');
	$sms_bad = $this->session->flashdata('sms_bad');
?>
<div class="col-sm-9">
					<div class="thumbnail box-shadow">
						<h4 class="header-text text-center">Add a System user <span class="glyphicon glyphicon-user"></span></h4>
						<?php if($sms): ?>
							<div class="alert alert-success">
								<span class="glyphicon glyphicon-ok"></span> <?php echo $sms;?>
							</div>
						<?php endif;?>
						<form method="post" action="<?php echo base_url('Add_admin/add/'.$one_user->id) ?>" role="form">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<label for="name">First name</label>
										<input type="text" name="fname" value="<?php echo $one_user->f_name; ?>" class="form-control" placeholder="Type here ..." required />
									</div>
									<div class="col-sm-6">
										<label for="name">Last name</label>
										<input type="text" name="lname" value="<?php echo $one_user->l_name ?>" class="form-control" placeholder="Type here ..." required />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<label for="id">Phone</label>
										<input type="number" name="phone" value="<?php echo $one_user->phone ?>" class="form-control" placeholder="Type here ..." required />
									</div>
									<div class="col-sm-6">
										<label for="id">E-mail</label>
										<input type="email" name="email" value="<?php echo $one_user->email ?>" class="form-control" placeholder="Type here ..." required />
									</div>
								</div>
							</div>
							<button name="add" class="btn btn-info">Add user</button>
						</form>
					</div>