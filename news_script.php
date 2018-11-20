<!DOCTYPE html>
<html>
<head>
  <title>CARAVAN | Newsletter Script</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="indexcss.css">
</head>
<body>

<?php

require("includes/common.php");
include 'includes/header.php';

$user_id= "$_SESSION[user_id]";
//echo "$user_id";

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);
  //echo "$name";

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);
  //echo "$email";

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  //$regex_num = "/^[789][0-9]{9}$/";
    
    $query = "INSERT INTO newsletter(user_id, name, email)VALUES('" . $user_id . "','" . $name . "','" . $email . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    //$user_id = mysqli_insert_id($con);
?>
<div class="container">
<br><br><br><br>
<div class="col-md-3"></div>
<div class="col-md-6">
	<div class="success" style="background-color: #ddffdd; border-left: 6px solid #4CAF50; padding-left: 20px; padding-right: 20px; padding-top: 15px; padding-bottom: 15px; border-radius: 10px; margin-bottom: 40px;">
	  <h2><u>Thank you</u>!</h2>
	  <h3><i>Welcome to our family. Thank you for subscribing to our newsletter<br><br> Now, you can get all the details about what is happening in the Caravan family. <br> You will also be able to know what's in store in the near future for us.<br> <br> You will also be able avail special discounts for hotels, restaurants and transport. Only for our subscribers!</i></h3>
	</div>
</div>
</div>
<?php
  include 'includes/foot.php'; 
  include 'includes/footer.php'; 
 ?>

</body>
</html>


