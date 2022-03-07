<!doctype html>
<html lang="en">
	<head>
		<?php include('common_header.php');?>
	</head>
	<body>
		<?php include('stdnt_header.php');?>
		<div class="container">
			<div class="row dash-section">
				<?php include('stdnt_left.php');?>
				<div class="col-sm-9">
					<?php include($read_more); ?>
					<div class="thumbnail box-shadow">
						<div class="row">
							<div class="col-sm-6">
								<h3>List of Course</h3>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
		                            <div class="input-group">
		                                <span class="input-group-addon">Search</span>
		                                <input type="text" name="search_text" id="search_text" placeholder="Type here to search" class="form-control" />
		                            </div>
		                        </div>
							</div>
						</div>
						
						<div class="table-responsive table-full-width form-add-project" id="result">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php include('common_footer.php'); ?>
	</body>
</html>
<script>
	$(document).read(function(){
        load_data();
        function load_data(query){
            $.ajax({
                url:"<?php echo base_url(); ?>Ajaxsearch/fetch",
                method:"POST",
                data:{query:query},
                success:function(data){
                    $("#result").html(data);
                }
            });
        }
        /*$("#search_text").keyup(function(){
            var search = $(this).val();
            if(search != ''){
                load_data(search);
            }else{
                load_data();
            }
        });*/
    });
</script>