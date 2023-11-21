<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Doctor's Dashboard</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<body>
  <?
    include("../include/header.php");
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
          <h5>Doctor's Dashboard</h5>
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
                      <h5 class="text-white my-2" style ="font-size: 30px" >O</h5>
                      <h5 class="text-white">Total</h5>
                      <h5 class="text-white">Patient</h5>
                    </div>
                    <div class = "col-md-4">
                     <a href="#"></a> <i class="fa fa-procedures fa-3x my-4"style = "color: white;"></i>

                    </div>

                  </div>

                </div>

              </div>

              <div class = "col-md-3 my-2 bg-success mx-2" style="height: 150px";>
                <div class="col-md-12">
                  <div class= "row">
                    <div class="col-md-8">
                      <h5 class="text-white my-2" style ="font-size: 30px" >O</h5>
                      <h5 class="text-white">Total</h5>
                      <h5 class="text-white">Appointment</h5>
                    </div>
                    <div class = "col-md-4">
                     <a href="#"></a> <i class="fa fa-calendar fa-3x my-4"style = "color: white;"></i>

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
  </div>
</body>
</html>