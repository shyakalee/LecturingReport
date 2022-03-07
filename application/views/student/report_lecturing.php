<!doctype html>
<html lang="en">
	<head>
		<?php include('common_header.php');?>
		
	</head>
	<body>
		<?php include('stdnt_header.php');?>
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
								<a href="<?php echo base_url('Student/post_lecturing') ?>" class="btn btn-danger">Close <span class="glyphicon glyphicon-remove"></span></a>
							</div>
						</div>
						<div id="to_print">
						<div class="row">
							<div class="col-sm-6 text-left"><h3>Computer Science Lecturing</h3></div>
							<div class="col-sm-6 text-right"><h3>Date 23 dec 2018</h3></div>
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
									<th>description</th>
								</thead>
								<tbody>
									<td>01</td>
									<td>Level 2</td>
									<td>Mugisha Fiston</td>
									<td>Database</td>
									<td>Dr Gahamanyi Joseph</td>
									<td>3h</td>
									<td>
										By the observation, the researcher notes by his/her own eyes what is done in reality. It can bring some modifications on the results got by other techniques. Cat on /20
									</td>
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