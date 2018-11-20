<?php
  require("includes/common.php");
?>

<?php
if (!isset($_SESSION['user_id'])) {
  header('location: redirect.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bookworm | Settings Page</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


      <?php
        include 'includes/header.php';
      ?>

       <div class="container-fluid" style="margin-top: 100px;">        
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                      <div class="thumbnail" style="height: 390px; padding-left: 15px; padding-right: 15px;">
                        <h2>Change Password</h2>
                        <br>
                        <form action="settings_script.php" method="POST">
                            <div class="form-group">
                                <input type="password"  class="form-control" placeholder="Old Password" name="old-password"  required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="New Password"  name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type New Password" name="password1" required = "true"><br><br>
                            </div>
                            <center>
                               <button type="submit" class="btn btn-primary btn-lg active">Change</button></a>
<br><br>
                                  <b class='red'>
                                    <?php 


                                    $error = ''; 
                                      if( isset( $_GET['error'])) {
                                          $error = $_GET['error'];                                       
                                        echo "$error";
                                      }
                                    ?>

                                         </b><br><br><br>

                                      
                            </center>
                            </form>
                        </div>
                    </div>
             </div>
        </div>
      

 <style>            
  .thumbnail {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);}
</style>

  <?php
  include 'includes/foot.php'; 
  include 'includes/footer.php'; 
 ?>

	 </body>
</html>
