<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script> </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>
	<nav class ="navbar navbar-expand-lg navbar-info bg-info"> 
		<h5 class ="text-while">Hospital Management System</h5>
		<div class="mr-auto"></div>
		<ul class="navbar-nav">
			<?php 

			if (isset($_SESSION['admin'])) {
				$user = $_SESSION['admin'];
				echo '

			<li class="nav-item"><a href="#" class="nav-link">'.$user.'</a> </li>
			<li class="nav-item"><a href="logout.php" class="nav-link">logout</a></li>
				';
				
			}elseif (isset($_SESSION['doctor'])) {
				$user = $_SESSION['doctor'];
				echo '
				<li class="nav-item"><a href="#" class="nav-link">'.$user.'</a> </li>
			<li class="nav-item"><a href="logout.php" class="nav-link">logout</a></li>

				';
			}


		elseif(isset($_SESSION['patient'])) {
			$user = $_SESSION['patient'];
				echo '
				<li class="nav-item"><a href="#" class="nav-link">'.$user.'</a> </li>
			<li class="nav-item"><a href="logout.php" class="nav-link">logout</a></li>

				';
		}else{

				echo '
			<li class="nav-item"><a href="index.php" class="nav-link">Home</a> </li>
			<li class="nav-item"><a href="adminlogin.php" class="nav-link">Admin</a> </li>
			<li class="nav-item"><a href="doctorlogin.php" class="nav-link">Doctor</a> </li>
			<li class="nav-item"><a href="patienlogin.php" class="nav-link">Patient</a> </li>
				';
			}

			 ?>


			
		</ul>
		
	</nav>

</body>
</html>