<<?php 
session_start(); ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Edit Doctor</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<body>
  <?php
  include("../include/header.php");
	include("../include/connection.php");
  ?>
  <div class="containrt-fluid">
    <div class= "col-md-12">
      <div class="row">
        <div class="col-md-2" style="margin-left: -30px;">
        <?php
        include("sidenav.php");

        ?>
      </div>
      <div class="col-md-10">
        <h5 class="text-center">Edit Doctor</h5>


        <?php

        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $querry = "SELECT * FROM doctors WHERE id ='$id'";
          $res = mysqli_query($connect, $querry);
          $row = mysqli_fetch_array($res); 

        }
        ?>
        <div class="row">
          <div class="col-md-8">
          <h5 class="text-center"></h5> Doctor Detail</h5>
          <h5> ID : <?php echo $row['id']; ?></h5>
          <h5> Firstname : <?php echo $row['firstname']; ?></h5>
          <h5> Surname : <?php echo $row['surname']; ?></h5>
          <h5> Username : <?php echo $row['username']; ?></h5>
          <h5> Email : <?php echo $row['email']; ?></h5>
          <h5> Phone : <?php echo $row['phone']; ?></h5>
          <h5> Gender : <?php echo $row['gender']; ?></h5>
          <h5> Country : <?php echo $row['country']; ?></h5>
          <h5> Date Register : <?php echo $row['data_reg']; ?></h5>
          <h5> Salary : $<?php echo $row['salary']; ?></h5>
          </div>
          <div class="col-md-4">
            <h5 class="text-center">Update Salary</h5>
            <?php
            if(isset($_POST['update'])){

              $salary = $_POST['salary'];
              $q = "UPDATE doctor SET salary='$salary' WHERE id='$id'";
              mysql_query($connect,$q);
            
            }
            ?>
            <form method="post">
              <label>Enter Doctor's Salary</label>
              <input type="number" name="salary" class ="form-control" autocomplete="off" placeholder="Enter Doctor's Salary" value="<?php echo $row['salary']?>">
              <input type="submit" name="update" class= "btn btn-info my-3" value="Update Salary">
            </form>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  
</body>
</html>