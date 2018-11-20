<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Music Emporium | Redirecting</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Arbutus' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="indexcss.css">
</head>

<style type="text/css">
	.container {
    position: relative;
}

/* Bottom right text */
.text-block {
    position: absolute;
    bottom: 150px;
    right: 580px;
    background-color: white;
    color: black;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 5px;
}
</style>


<body>
  <div class="jumbotron" >
		<center>
    <h1>Hello!</h1>
    <h3>You need to log into our website. <br>Redirecting you now...</h3>
	</center>
	</div>

	<?php
		header("Refresh :5;http://localhost/musice/login.php");
	?>

</body>
</html>
