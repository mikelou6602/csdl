<?php
include("include/connection.php");


if (isset($_POST['create'])) {
  $fname = $_POST['fname'];
  $sname = $_POST['sname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
	$gender = $_POST['gender'];
  $country = $_POST['country'];
	$pass = $_POST['pass'];
  $con_pass = $_POST['con_pass'];

	$error = array();
	

	if (empty($fname)) {
		$error['ac'] = "Enter Firstname";
	}elseif (empty($sname)) {
		$error['ac'] = "Enter Surname";
  }elseif (empty($uname)) {
		$error['ac'] = "Enter Username";
  }elseif (empty($email)) {
		$error['ac'] = "Enter Email";  
  }elseif (empty($phone)) {
		$error['ac'] = "Enter Phone";
  }elseif (empty($gender)) {
		$error['ac'] = "Enter Gender";      
	}elseif (empty($country)) {
		$error['ac'] = "Enter Country";
  }elseif (empty($pass)) {
		$error['ac'] = "Enter Password";
  }elseif ($con_pass != $pass) {
		$error['ac'] = "Mật khẩu không tìm thấy";  
    
	
	}
	if (count($error) == 0) {
		$query = "INSERT INTO patient(firstname,surname,username,email,phone,gender,country,password,data_reg,profile) VALUES('$fname','$sname','$uname','$email','$phone','$gender',$country','$password','NOW()','patient.jpg')";
		$res = mysqli_query($connect,$query);

		if ($res) {
			header("Location:patientlogin ");
		}else{
			echo "<script>alert('failse') </script>";

		}
	


if (isset($error['login'])) {
	$l = $error['login'];

	$show = "<h5 class='text-center alert alert-danger'>$l</h5>";
}else{
	$show ="";
}
  ?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Account</title>
</head>
<body style="background-image: url(img/hospital.jfif);background-repeat: no-repeat;background-size: cover;">
<?php
   include("../include/header.php");
  ?>

  		<div class="container-fluid">
  			<div class="col-md-12">
  				<div class="row">
  					<div class="col-md-3"></div>
  					<div class="col-md-6 my-5 jumbotron">
  						<h5 class="text-center my-3"></h5>Create Account</h5>
  						
  						<form method="post">
  							<div class="form-group">
  								<label>Firstname</label>
  								<input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Firstname">
  							</div>
  							<div class="form-group">
  								<label>Surname</label>
  								<input type="text" name="sname" class="form-control" autocomplete="off" placeholder="Enter Surname">
  							</div>
                <div class="form-group">
  								<label>Username</label>
  								<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
  							</div>
                <div class="form-group">
  								<label>Email</label>
  								<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Email">
  							</div>
                <div class="form-group">
  								<label>Phone</label>
  								<input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Phone">
  							</div>
                <div class="form-group">
  								<label>Gender</label>
  								<select name="gender" class = "form-control">
                    <option value="">Your Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
  							</div>
                <div class="form-group">
  								<label>Country</label>
  								<select name="gender" class = "form-control">
                    <option value="">Your Country</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="#">#</option>
                  </select>
  							</div>
                <div class="form-group">
  								<label>Password</label>
  								<input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">
  							</div>
                <div class="form-group">
  								<label>Confirm Password</label>
  								<input type="password" name="con_pass" class="form-control" autocomplete="off" placeholder="Enter Confirm Password">
  							</div>
  							<input type="submit" name="create" class="btn btn-info" value="Create Account">
                <p>Already <a href="patientlogin.php">Click here</a></p>

  							
  						</form>
  					</div>
  				</div>
  				
  			</div>
  		</div>



</body>
</html>