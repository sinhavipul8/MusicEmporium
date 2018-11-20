<!DOCTYPE html>
<html>
<head>
    <title> Music Emporium | Login Page    </title>

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

      <?php
        include 'includes/header.php';
      ?>

        <div id="content" style="margin-top: 120px; margin-bottom: 20px;">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading" >
                                <h4 style="margin-left: 150px">LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <br>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                          <div class="input-group">
                                            <div class="input-group-addon">
                                               <span class="glyphicon glyphicon-envelope"></span>
                                            </div>
                                                <input type="email" class="form-control"  placeholder="Email" name="email" required = "true" method= "post">
                                        </div>
                                    </div>
                                    <br>
                            <div class="form-group">
                                <div class="input-group">
                                      <div class="input-group-addon">
                                           <span class="glyphicon glyphicon-lock"></span>
                                      </div>
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                </div>
                            </div>
                                    <button type="submit" name="submit" class="btn btn-primary" style="margin-left: 140px";>Login &nbsp &nbsp<span class="glyphicon glyphicon-arrow-right"></span></button>

                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>

        <!--<span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>-->
        </div>

<style>
    .dot {
  height: 25px;
  width: 25px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}
</style>


<?php
  include 'includes/foot.php';
  include 'includes/footer.php';
 ?>

    </body>
</html>
