<?php 

	session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>

	<<?php 

		include("../include/header.php");

		include("../include/connection.php");
	 ?>
<div class="container-fluid">
	
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2" style="margin-left: -30px" >
				<?php
				include("sidenav.php");

				  ?>
				
			</div>
			<div class="col-md-10">
				<h4 class="my-2">Admin Dashboard</h4>
				<div class="col-md-12 my-1">
					<div class="row">
						<div class="col-md-3 bg-success mx-3" style="height: 130px;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
											<?php
											$ad = mysqli_query($connect,"SELECT * FROM admin");
											$num = mysqli_num_rows($ad);

											  ?>
										<h5 class="my-1 text-white text-center"style="font-size: 30px;"><?php echo $num; ?></h5>
										<h5 class="text-white">Tatol</h5>
										<h5 class= "text-white">Admin</h5>
									</div>
									<div class="col-md-4">
										<a href="admin.php"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 bg-info mx-3" style="height: 130px;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
										<?php
											$doctor = mysqli_query($connect,"SELECT * FROM doctors WHERE status ='Approved'");
											$num2 = mysqli_num_rows($doctor);	

										?>
										<h5 class="my-1 text-white text-center"style="font-size: 30px;"></h5><?php echo $num2 ?>0</h5>
										<h5 class="text-white">Tatol</h5>
										<h5 class= "text-white">Doctor</h5>
									</div>
									<div class="col-md-4">
										<a href="doctor.php"><i class="fa fa-user-md fa-3x my-4" style="color: white;"></i></a>
									</div>
								</div>
							</div>
						</div>


						<div class="col-md-3 bg-warning mx-3" style="height: 130px;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
										<h5 class="my-1 text-white text-center"style="font-size: 30px;">0</h5>
										<h5 class="text-white">Tatol</h5>
										<h5 class= "text-white">Patient</h5>
									</div>
									<div class="col-md-4">
										<a href="#"><i class="fa fa-procedures fa-3x my-3" style="color: white; margin-left: -10px;"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 bg-danger mx-3 my-4" style="height: 130px;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
										<h5 class="my-1 text-white text-center"style="font-size: 30px;">0</h5>
										<h5 class="text-white">Tatol</h5>
										<h5 class= "text-white">Report</h5>
									</div>
									<div class="col-md-4">
										<a href="#"><i class="fa fa-flag fa-3x my-4" style="color: white;"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 bg-warning mx-3 my-4" style="height: 130px;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8" >
										<?php
											$job = mysqli_query($connect,"SELECT * FROM doctors WHERE status ='Pendding'");
											$num1 = mysqli_num_rows($job);



										  ?>



										<h5 class="my-1 text-white text-center"style="font-size: 30px;"><?php echo $num1 ?></h5>
										<h5 class="text-white">Tatol</h5>
										<h5 class= "text-white">Job request</h5>
									</div>
									<div class="col-md-4">
										<a href="job_request.php"><i class="fa fa-book-open fa-3x my-4" style="color: white;"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 bg-success mx-3 my-4" style="height: 130px;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
										<h5 class="my-1 text-white text-center"style="font-size: 30px;">0</h5>
										<h5 class="text-white">Tatol</h5>
										<h5 class= "text-white">Income</h5>
									</div>
									<div class="col-md-4">
										<a href="#"><i class="fa fa-money-check-alt fa-3x my-4" style="color: white;"></i></a>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>


</body>
</html>