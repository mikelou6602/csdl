

<!DOCTYPE html>
<html>
<head>
	<title>HMS Home Page</title>
</head>
<body>
	<?php
	include("include/header.php")
	?>
	<div style="margin-top:50px"> </div>

	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3 mx-1 shadow"> 
					<img src="img/info.jfif" style="width: 100%; height: 190px;">
					<h5 class="text-center">bấm để biết thêm thông tin </h5>
					<a href="#">
						<button class="btn btn-success" style="margin-left: 50px"> More...</button>
					</a>

				</div> 

				<div class="col-md-4 mx-1 shadow"> 
					<img src="img/patient.jfif" style="width: 100%;height: 190px ;">
					<h5 class="text-center">Create Account so that we can take good care of you</h5>
					<a href="account.php">
						<button class="btn btn-success" style="margin-left: 50px" > Create Account</button>
					</a>
				</div> 

				<div class="col-md-4 mx-1 shadow"> 
					<img src="img/doctor.jfif" style="width: 100%;height: 190px ;">
					<h5 class="text-center">We are looking for doctors</h5>
					<a href="#">
						<button class="btn btn-success" style="margin-left: 50px">Apply Now</button>
					</a>
				</div> 
			</div>
		</div>
		
	</div>

</body>
</html>