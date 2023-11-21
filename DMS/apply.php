<?php

include("include/connection.php");

if (isset($_POST['apply'])) {
	$firstname = $_POST['fname'];
	$lastname = $_POST['sname'];
	$username = $_POST['uname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	$password = $_POST['pass'];
	$confirm_password = $_POST['con_pass'];


	$error = array();
	if (empty($firstname)) {
		$error['apply'] = "Enter Firstname";
	}elseif (empty($lastname)) {
		$error['apply'] = "Enter Lastname";	
	}elseif (empty($username)) {
		$error['apply'] = "Enter Username";
	}elseif (empty($email)) {
		$error['apply'] = "Enter Email";
	}elseif ($gender =="") {
		$error['apply'] = "Enter Gender";
	}elseif (empty($phone)) {
		$error['apply'] = "Enter Phone";
	}elseif (empty($password)) {
		$error['apply'] = "Enter Password";
	}elseif (empty($confirm_password)) {
		$error['apply'] = "Enter Confirm Password";
	}

	if (count($error) == 0) {
		$query = "INSERT INTO doctors( firstname, lastname, username, email, gender, phone, password, data_reg, salary, status, specialist`) VALUES('$firstname','$lastname','$username','$email','$gender','$phone','$password',NOW(),'0','Pendding','NULL')";
			$result = mysqli_query($connect,$query);

			if ($result) {
				echo "<script>alert('You have Success Appled')</script>";
				header("Location:doctorlogin.php");
			}else{
				echo "<script>alert('Failse')</script>";
			}
		
	}
}
	if (isset($error['apply'])) {
		$s = $error['apply'];

		$show ="<h5 class= 'text-center alert alert-danger>$s</h5>";
	}else{
		$show ="";
	}

  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Apply Now</title>
</head>
<body style="background-image: url(img/hospital.jfif);background-size: cover;background-repeat: no-repeat;">

	<?php
	include("include/header.php");
	  ?>
	  <div class="container-fluid">
	  	<div class="col-md-12">
	  		<div class="row">
	  			<div class="col-md-3"></div>
	  			<div class="col-md-6 my-3 jumbotron">
	  				<h5 class="text-center">Apply Now!</h5>
	  				<div> <?php echo $show; ?></div>
	  				<form method="post">
	  					<div class="form-group">
	  						<label>Firstname</label>
	  						<input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Firstname" value="<?php if (isset($_POST['fname'])) echo $_POST['fname'];?>">
	  						
	  					</div>
	  					<div class="form-group">
	  						<label>Lastname</label>
	  						<input type="text" name="sname" class="form-control" autocomplete="off" placeholder="Enter Lastname" value="<?php if (isset($_POST['sname'])) echo $_POST['sname'];?>s>
	  					</div>
	  					<div class="form-group">
	  						<label>Username</label>
	  						<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username" value="<?php if (isset($_POST['uname'])) echo $_POST['uname'];?>">
	  					</div>
	  					<div class="form-group">
	  						<label>Email</label>
	  						<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Email" value="<?php if (isset($_POST['email'])) echo $_POST['email'];?>"email>
	  					</div>
	  					<div class="form-group">
	  						<label>Select gender</label>
	  						<select name="gender">
	  							<option value="">Select Gender</option>
	  							<option value="Male">Male </option>
	  							<option value="Female">Female </option>

	  						</select>
	  						
	  					</div>
	  					<div class="form-group">
	  						<label>Phone</label>
	  						<input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone" value="<?php if (isset($_POST['phone'])) echo $_POST['phone'];?>"phone>
	  					</div>
	  					<div class="form-group">
	  						<label>Password</label>
	  						<input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">
	  					</div>
	  					<div class="form-group">
	  						<label>Confirm Password</label>
	  						<input type="password" name="con_pass" class="form-control" autocomplete="off" placeholder="Enter Confirm Password">
	  					</div>
	  					<input type="submit" name="apply" value="Apply" class="btn btn-success">
	  					<p>I already have a account <a href="doctorlogin.php">Click Here</a></p>

	  					

	  				</form>
	  			</div>
	  			<div class="col-md-3"></div>
	  			
	  		</div>
	  		
	  	</div>
	  </div>

</body>
</html>