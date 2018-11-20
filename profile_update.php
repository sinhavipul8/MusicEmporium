<?php
require("includes/common.php");
?>

<?php
if (!isset($_SESSION['user_id'])) {
  header('location: redirect.php');
}
?>


    	<?php

			  $address = $_POST['address'];
			  $landmark = $_POST['landmark'];
			  $phone = $_POST['phone'];

			$query = "UPDATE users SET address='$address', landmark='$landmark', phone=$phone WHERE id=$_SESSION[user_id] ";
			      $result = mysqli_query($con, $query)or die(mysqli_error($con));
			header('location: profile.php');
    	?>