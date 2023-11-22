<?php
include("../include/connection.php");
if (isset($_POST[';login'])) {
	$uname = $_POST['uname'];
	$password = $_POST['pass'];

	$error = array();
	$q = "SELECT * FROM doctors WHERE username='$uname' and password = '$password'";
	$qq = mysqli_query($connect,$q);
	$row = mysqli_fetch_array($qq);

	if (empty($uname)) {
		$error['login'] = "Enter Username";
	}elseif (empty($password)) {
		$error['login'] = "Enter Password";
	}elseif ($row['Pendding'] == "Pendding") {
		$error['login'] = "please wait for the admin confirm";
	}elseif ($row['Pendding'] == "Rejected") {
		$error['login'] = "try again";
	}
	if (count($error) == 0) {
		$query = "SELECT * FROM doctors WHERE username='uname' AND password = '$password'";
		$res = mysqli_query($connect,$query);
		if (mysqli_num_rows($res)) {
			echo "<script>alert('done') </script>";
			$_SESSION['doctor'] = $uname;
			//header("Location: ")
		}else{
			echo "<script>alert('failse') </script>";
		}
	}
}
if (isset($error['login'])) {
	$l = $error['login'];
	$show = "<h5 class='text-center alert alert-danger'>$l</h5>";
}else{
	$show ="";
}
  ?>
}

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor Login Page</title>
</head>
<body style="background-image: url(img/hospital.jfif);background-repeat: no-repeat;background-size: cover;">
<?php
   include("../include/header.php");
  ?>
  		<div class="container-fluid">
  			<div class="col-md-12">
  				<div class="row">
  					<div class="col-md-3"></div>
  					<div class="col-md-6 jumbotron">
  						<h5 class="text-center my-5">Doctor Login</h5>
  						<div>	<?php echo $show; ?>	</div>
  						<form method="post">
  							<div class="form-group">
  								<label>Username</label>
  								<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
  							</div>
  							<div class="form-group">
  								<label>Password</label>
  								<input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">
  							</div><br>
  							<input type="submit" name="login" class="btn btn-success" value="Login">
  							<p>I don't have a account <a href="apply.php">Apply Now!</a></p>
  						</form>
  					</div>
  				</div>
  				
  			</div>
  		</div>
</body>
</html>