<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Script</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="indexcss.css">
</head>
<body>

  <?php

require("includes/common.php");
//include 'includes/header.php';

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  //$password = MD5($password);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $country = $_POST['country'];
  $country = mysqli_real_escape_string($con, $country);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  //$regex_num = "/^[789][0-9]{9}$/";

   $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";

    ?>

   <div class="container" style="margin-top: 100px;">
      <div class="jumbotron">
          <h3><strong> Email Already Exists!</strong></h3> 
          <br>
          <p>If you already have an account,<a href="login.php">Log In Now!</a></p> 
          <br>
          <p>If you want to continue with a different email id,<a href="signup_page.php">Sign Up Now!</a></p>
      </div>
     </div>


   <?php
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    ?>

   <div class="container" style="margin-top: 100px;">
      <div class="jumbotron">
          <h3><strong> Not a Valid email Id!</strong></h3> 
          <br>
          <p>If you already have an account,<a href="login.php">Log In Now!</a></p> 
          <br>
          <p>If you want to continue with a different email id,<a href="signup_page.php">Sign Up Now!</a></p>
      </div>
     </div>

     
<?php 
  }
  else {
    
    $query = "INSERT INTO users(name, email, password, contact, city, country)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $country . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: home.php');
  }
?>

<?php
  include 'includes/foot.php'; 
  include 'includes/footer.php'; 
 ?>

</body>
</html>


