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
	<title> Music Emporium | Wishlist	</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="book_demo_css.css">

    <?php
        include 'includes/header.php';
    ?>

    </head>
    <body>
    	<br><br><br>

 <?php
    $user_id = $_SESSION['user_id'];
    $qry = "SELECT * from items JOIN wishlist ON wishlist.item_id = items.id WHERE wishlist.user_id='$user_id' ";
    $res = mysqli_query($con, $qry)or die($mysqli_error($con));
    if(mysqli_affected_rows($con)>0){
			while($r=mysqli_fetch_array($res,MYSQLI_NUM)){
  ?>


<div class="container-fluid">
            <div class="col-md-10" style="margin-left: 100px; margin-top: 20px;" ><center>
            <div class="thumbnail" style="height: 200px; box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);">
                <div class="col-md-2">
                  <img src="images/<?php echo"$r[5]" ?>" style="height: 190px;" alt="Responsive Image">
                </div>
                <div class="col-md-4">
                  <h2><?php echo "$r[1]"; ?></h2>
                  <strong><h4>Price: <?php echo "$r[4]"; ?></h4></strong>
                  <i>Remove</i> &nbsp<a href="wishlist_remove.php?id=<?php echo "$r[0]"; ?>"><button class="btn btn-lg btn-default" type="submit" name="view" style="border-radius: 50%;"><b>X</b></a></button>
                </div>
                <div class="col-md-4" style="border-left: solid;">
                  <br>
                  <a href="item.php?id=<?php echo "$r[0]"; ?>"><button class="btn btn-lg btn-default" type="submit" name="view">View</a></button>
                </div>
             </div>
        </div></center>

  </div>


<?php
}
}else{
?>
<br><br>
<div class="container-fluid">
	<!--<div class="thumbnail" style="height: 300px; box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);">-->
		<div class="jumbotron" style="font-family: 'Acme'">
      <center>
			<h1 style="font-size: 36px;">You have no items added to your wishlist.</h2><br>
			</center>
    </div>


</div>
<?php
}
?>
<br><br><br><br><br>

	<?php
        include 'includes/foot.php';
        include 'includes/footer.php';
    ?>


    </body>
  </html>
