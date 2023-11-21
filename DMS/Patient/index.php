<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Patient's Dashboard</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<body>
  <?
    include("../include/header.php");
    include("../include/connection.php");

  ?>
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2" style="margin-left: -30px;">
          <?php
            include("sidenav.php");
          ?>
      </div>
      <div class="col-md-10">

        <div class="container-fluid">
          <h5>Patient's Dashboard</h5>
          <div class="col-md-12">
            <div class="row">
              <div class = "col-md-3 my-2 bg-info mx-2" style="height: 150px";>
                <div class="col-md-12">
                  <div class= "row">
                    <div class="col-md-8">
                      <h5 class="text-white">My Profile</h5>
                    </div>
                    <div class = "col-md-4">
                     <a href="profile.php"></a> <i class="fa fa-user-circle fa-3x my-4"style = "color: white;"></i>

                    </div>

                  </div>

                </div>

              </div>
              <div class = "col-md-3 my-2 bg-warning mx-2" style="height: 150px";>
                <div class="col-md-12">
                  <div class= "row">
                    <div class="col-md-8">
                    
                      <h5 class="text-white">Book Appointment</h5>
                    </div>
                    <div class = "col-md-4">
                     <a href="#"></a> <i class="fa fa-calendar fa-3x my-4"style = "color: white;"></i>

                    </div>

                  </div>

                </div>

              </div>

              <div class = "col-md-3 my-2 bg-success mx-2" style="height: 150px";>
                <div class="col-md-12">
                  <div class= "row">
                    <div class="col-md-8">
                      
                      <h5 class="text-white">My Invoice</h5>
                    </div>
                    <div class = "col-md-4">
                     <a href="#"></a> <i class="fa fa-file-invoice-dollar fa-3x my-4"style = "color: white;"></i>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>
          <?php 
          if(isset($_POST["send"])){

            $titl = $_POST["send"];
            $message = $_POST["message"];
            
            if(empty($titl)){ 


            }else if(empty($message)){

            }else{
              $user=$_SESSION ["patient"];
              $querry ="INSERT INTO report(title,message,username,data_send) VALUES('$title','$message','$user','NOW()')";
              $res = mysqli_query($connect, $querry);
             
          }

        }

          ?>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6 jumbotron bg-info my-5">
                
                <h5 class="text-center my-2">Send Report</h5>
                <form method="post">
                  <label>Title</label>
                  <input type="text" name="title" autocomplete="off" class="form-control" placeholder="Enter Title of the report">
                  <label>Message</label>
                  <input type="text" name="message" autocomplete="off" class="form-control" placeholder="Enter Message">
                  <input type="submit" name="send" value="Send Report" class="btn btn-success my-2"> 
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
      
    </div>
  </div>
</body>
</html>