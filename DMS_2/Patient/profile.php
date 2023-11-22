<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Patient's Profile</title>
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
            include("../include/connection.php");
          ?>
      </div>
      <div class="col-md-10">

        <div class="container-fluid">
          
          <div class="col-md-12">
            <div class="row">
                    <div class="col-md-6">

                      <?php
                        $doc= $_SESSION['patient'];
                        $query = "SELECT * FROM patient WHere username ='$doc'";
                        $res = mysqli_query($connect, $query);
                        $row = mysqli_fetch_array($res);

                        if(isset($_POST["upload"])){}
                      ?>

                      <div class="my-3">
                        <table class="table table-bordered">
                          <tr>
                            <th colspan="2" class="text-center">Details</th>
                          </tr>
                          <tr>
                            <td>Firstname</td>
                            <td><?php echo $row['firstname']?></td>
                          </tr>

                          <tr>
                            <td>Surname</td>
                            <td><?php echo $row['surname']?></td>
                          </tr>

                          <tr>
                            <td>Username</td>
                            <td><?php echo $row['username']?></td>
                          </tr>

                          <tr>
                            <td>Email</td>
                            <td><?php echo $row['email']?></td>
                          </tr>

                          <tr>
                            <td>Phone</td>
                            <td><?php echo $row['phone']?></td>
                          </tr>

                          <tr>
                            <td>Gender</td>
                            <td><?php echo $row['gender']?></td>
                          </tr>

                          <tr>
                            <td>Country</td>
                            <td><?php echo $row['country']?></td>
                          </tr>

                          
                        </table>
                      </div>

                      
                    </div>
                    <div class="col-md-6">
                      <h5 class="text-center my-2">Update Username</h5>
                      <?php
                      if(isset ($_POST['change_uname'])){
                        $uname = $_POST['uname'];

                          if(empty($uname)){

                          }else{
                            $query=" UPDATE patient SET username ='$uname' WHERE username ='$doc'";

                            $res = mysqli_query($connect, $query);

                            if($res){
                              $_SESSION["patient"] = $uname;
                            }
                          }

                      }

                      ?>
                      <form method="post">
                        <label>Change Username</label>
                        <br>
                        <input type="submit" name="change_uname" class="btn btn-success" value="Change Username">
                      </form>
                      <br><br>
                      <h5 class="text-center my-2">Change Password</h5>
                      <?php
                      if(isset ($_POST['change_pass'])){
                        $old = $_POST['old_pass'];
                        $new = $_POST['new_pass'];
                        $con = $_POST['con_pass'];

                        $ol = "SELECT * FROM patients WHERE username = '$doc'";
                        $ols = mysqli_query($connect, $ol);
                        $row = mysqli_fetch_array($ols);


                          if($old != $row['password'] ){

                          }else if(empty($new)){

                          }else if($con != $new){
                            $query=" UPDATE patient SET password ='$new' WHERE username ='$doc'";

                            $res = mysqli_query($connect, $query);

                            if($res){
                              $_SESSION["patient"] = $uname;
                            }
                          }

                      }
                      ?>
                      <form method="post">
                        <div class="form-group">
                          <label>Old Password</label>
                          <br>
                          <input type="submit" name="old_pass" class="btn btn-success" value="Enter Old Password">
                        </div>
                        <div class="form-group">
                          <label>New Password</label>
                          <br>
                          <input type="submit" name="new_pass" class="btn btn-success" value="Enter New Password">
                        </div>
                        <div class="form-group">
                          <label>Confirm Password</label>
                          <br>
                          <input type="submit" name="con_pass" class="btn btn-success" value="Enter Confirm Password">
                        </div>
                        <input type="submit" name="change_pass" class="btn btn-success" value="Change Password">
                      </form>

                    </div>
                    <div class = "col-md-4">
                     <a href="#"></a> <i class="fa fa-user-circle fa-3x my-4"style = "color: white;"></i>

                    
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