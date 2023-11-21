<?php
	session_start();  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Job Request</title>
</head>
<body>
	<?php
	include("../include/header.php");
	  ?>
	  <div class="container-fluid">
	  	<div class="col-md-12"style="margin-left: -30px;">
	  		<div class="row">
	  			<div class="col-md-2">
	  				<?php
	  					include("sidenav.php");
	  				  ?>
	  			</div>
	  			<div class="col-md-10"> 
	  				<h5 class="text-center my">Job Requests</h5>

						<div id="show"></div>
	  			</div>
	  			
	  		</div>
	  		
	  	</div>
	  </div>
		<script type="text/javascript">
			$(document).ready(function(){
							show();
				function show(){
					$.ajax({
						url:"ajax_job_request.php",
						method:"POST",
						success:function(data){
							$("#show").html(data);
						}
					});
				}
				$(document).on('click','.approve',function()) {
					
					var id = $(this).attr("id");
					alert(id);

					$.ajax({
						url:"ajax_approve.php",
						method:"POST",
						data:{},
						success:function(data){
							show();

						}

					});
				});
			});

			$(document).on('click','.reject',function()) {
					
					var id = $(this).attr("id");
					alert(id);

					$.ajax({
						url:"ajax_reject.php",
						method:"POST",
						data:{},
						success:function(data){
							show();

						}

					});
				});
			});

			
		});
		</script>
</body>
</html>