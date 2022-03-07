<!doctype html>
<html lang="en">
	<head>
		<?php include('common_header.php');?>
		
	</head>
	<body>
		<?php include('leader_header.php');?>
		<div class="container">
			<div class="row dash-section">
				<?php //include('stdnt_left.php');?>
				<div class="col-sm-12">
					<div class="thumbnail box-shadow">
						<div class="row">
							<div class="col-sm-6">
								<button class="btn btn-primary" onclick="printme('to_print')">Print <span class="glyphicon glyphicon-print"></span></button>
								<!--<a class="btn btn-primary" href="javascript:void(0);" id="specific">Print <span class="glyphicon glyphicon-print"></span></a>-->
							</div>
							<div class="col-sm-6 text-right">
								<a href="<?php echo base_url('Leader/lecturing_posted') ?>" class="btn btn-danger">Close <span class="glyphicon glyphicon-remove"></span></a>
							</div>
						</div>
						<div id="to_print">
							<div class="page-header text-center" id="login">
								<img src="<?php echo base_url('assets/images/logo.jpg') ?>" class="img-responsive" style="margin:auto; width:300px;"/>
								<h2>Online Lecturing Monitoring System.</h2>
							</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-6 text-left"><h3><?php echo $from_depart->name; ?> Report</h3></div>
							<div class="col-md-6 col-sm-6 col-xs-6 text-right"><h3>Date <?php echo $datetime; ?></h3></div>
						</div>
						<div class="table-responsive table-full-width form-add-project">
							<table class="table table-striped table-hover"> <!-- hover -->
								<thead>
									<th>N<sup><u>o</u></sup></th>
									<th>Level</th>
									<th>Student</th>
									<th>course</th>
									<th>lecture</th>
									<th>duration</th>
								</thead>
								<tbody>
									<?php
										if(count($data_report)>0){
											$i=0;
											foreach($data_report as $row){
												if($rest = substr($row->date_time, 0, 10) == $datetime){
													echo'<tr>
															<td>'.++$i.'</td>
															<td>Level '.$row->level.'</td>
															<td>'.$row->std_fname.' '.$row->std_lname.'</td>
															<td>'.$row->name.'</td>
															<td>'.$row->le_fname.' '.$row->le_lname.'</td>
															<td>'.$row->duration.'</td>
														</tr>
														<tr><th colspan="2"><u>Description:</u></th><td colspan="4">'.$row->content.'</td></tr>
														';
												}
											}
											if($i == 0)
												echo'<tr><th colspan="7" class="text-danger text-center"><h2>Sorry! <span class="glyphicon glyphicon-ban-circle"></span> There are no data to print</h2></th></tr>';
										}else{
											echo'<tr><td colspan="7" class="text-danger">Sorry! there are no data to print </td></tr>';
										}
									?>
								</tbody>
							</table>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			function printme(data_to_print){
				var restorepage = document.body.innerHTML;
				var printcontent = document.getElementById(data_to_print).innerHTML;
				document.body.innerHTML = printcontent;
				window.print();
				document.body.innerHTML = restorepage;
			}
		</script>
		<?php include('common_footer.php'); ?>
	</body>
</html>