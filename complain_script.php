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
  <title>Music Emporium | Complains</title>

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

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $country = $_POST['country'];
  $country = mysqli_real_escape_string($con, $country);

  $subject = $_POST['subject'];
  $subject = mysqli_real_escape_string($con, $subject);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  //$regex_num = "/^[789][0-9]{9}$/";

    $query = "INSERT INTO grievance(user_id, name, email, country, subject)VALUES('" . $user_id . "','" . $name . "','" . $email . "','" . $country . "','" . $subject . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    //$user_id = mysqli_insert_id($con);
?>
<div class="container">
<br><br><br><br>
<div class="col-md-3"></div>
<div class="col-md-6">
	<div class="info" style="background-color: #e7f3fe; border-left: 6px solid #2196F3; padding-left: 20px; padding-right: 20px; padding-top: 15px; padding-bottom: 15px; border-radius: 10px; margin-bottom: 40px;">
	  <h2><u>Message Received</u>!</h2>
	  <h3><i>We apologise you for the inconvenience.<br><br> We will get back to you as soon as possible. <br><br></i></h3>
	</div>
</div>
</div>
<?php
  include 'includes/foot.php';
  include 'includes/footer.php';
 ?>

</body>
</html>
