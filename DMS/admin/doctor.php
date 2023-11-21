<?php
      session_start();

      ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Total Doctol</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<body>
      <?php
      include("../include/header.php");
      include("../include/connection.php");

      ?>
      <div class="container-fluid">
        <div class="col-md-12">
          <div class="row">
            <div class ="col-md-2" style ="margin-left: -30px ;">
            <?php
            include("sideav.php");

            ?>
          </div>
          <div class ="col-md-10">
              <h5 class= "text-center"> Total Doctors</h5>
            <?php

            $querry = "SELECT * FROM doctors WHERE status ='Approved' ORDER BY data_reg ASC";

            $res = mysqli_query($connect, $querry);


            $output="";

$output .="  
  <table class ='table table-bordered'>
    <tr>
      <th>ID</th>
      <th>Firstname</th>
      <th>Surname</th>
      <th>Username</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Phone</th>
      <th>Country</th>
      <th>Salary</th>
      <th>Date Register</th>
      <th>Action</th>
    
    
    
    </tr>
 "; 
  
if(mysql_num_rows($res)<1){
  $output .= "
    <tr>
    <td colspan='10' class='text-center'>No job Request Yet.</td>
    </tr>
  ";
}  
while($row = mysql_fetch_array($res)){
  $output .="
    <tr>
      <td>".$row["id"]."</td>
      <td>".$row["firstname"]."</td>
      <td>".$row["surname"]."</td>
      <td>".$row["username"]."</td>
      <td>".$row["email"]."</td>
      <td>".$row["gender"]."</td>
      <td>".$row["phone"]."</td>
      <td>".$row["country"]."</td>
      <td>".$row["salary"]."</td>
      <td>".$row["data_reg"]."</td>
      <td>
        <a href='edit.php?id=".$row["id"]."'>
          <button class='btn btn-info'>Edit</button>
        </a>
      </td>
  ";
}

$output .= "
      </tr>
      </table>
";

echo $output; 

            ?>
          </div>

          </div>
        </div>
      </div>
  
</body>
</html>