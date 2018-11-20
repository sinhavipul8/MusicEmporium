<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title> Music Emporium | Signup Page    </title>

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="indexcss.css">

</head>
<body>

      <?php
        include 'includes/header.php';
      ?>


      <div class="container">
           <!--<div class="col-md-6">
              <img src="images/wallpaper/signup_wall.jpg" style="margin-top: 150px;">
           </div>

<br><br><br><br>-->
                    <div class="col-md-5 " style="margin-top : 150px; margin-left: 330px; margin-bottom: 40px;">
                        <div class="panel panel-primary" >
                            <div class="panel-heading";>
                                <h4 style="margin-left: 150px;">SIGN UP</h4>
                            </div>
                            <div class="panel-body">
                                <br>


                          <form action="signup_script.php" method="POST">

                            <div class="form-group">
                                <div class="input-group">
                                  <div class="input-group-addon">
                                     <span class="glyphicon glyphicon-user"></span>
                                   </div>
                                <input class="form-control" placeholder="Name" name="name"  required = "true"  style="width: 380px;">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                 <div class="input-group-addon">
                                   <span class="glyphicon glyphicon-envelope"></span>
                                 </div>
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" style="width: 380px;" >
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                             <div class="input-group">
                               <div class="input-group-addon">
                                 <span class="glyphicon glyphicon-lock"></span>
                               </div>
                                   <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}" required = "true" style="width: 380px;">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                 <div class="input-group-addon">
                                   <span class="glyphicon glyphicon-phone"></span>
                                 </div>
                                <input type="text" class="form-control"  placeholder="Contact" name="contact" pattern=".{10,}" required = "true" style="width: 380px;">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                 <div class="input-group-addon">
                                   <span class="glyphicon glyphicon-map-marker"></span>
                                 </div>
                                <input type="text" class="form-control"  placeholder="City" name="city" required = "true" style="width: 380px;">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                 <div class="input-group-addon">
                                   <span class="glyphicon glyphicon-globe"></span>
                                 </div>
                                <input type="text" class="form-control"  placeholder="State" name="country" required = "true" style="width: 380px;">
                              </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-lg active" style="margin-left: 150px;">Submit</button></a>
                            <input type="hidden" name="f" value="0">


                          </form><br/>

                            </div>
                            <div class="panel-footer" style="margin-left: 100px;"><p>Already have an account? <a href="login.php">Log In</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </div>


<?php
  include 'includes/foot.php';
  include 'includes/footer.php';
 ?>

         </body>

    </html>
