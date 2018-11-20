<?php
  require("includes/common.php");
?>

<?php
if (!isset($_SESSION['user_id'])) {
  header('location: redirect.php');
}
?>

<?php
	if(isset($_REQUEST['status']) && isset($_REQUEST['id'])){

				//$msg="Added to cart";
?>
		<br><br><div class="alert alert-success" style="width: 130px; float: right; margin-right: 20px; margin-top: 30px;" role="alert"><b>Added to Cart</b></div>
<?php
			}
?>


<?php
	if(isset($_REQUEST['wish']) && isset($_REQUEST['id'])){

				//$msg="Added to cart";
?>
		<br><br><div class="alert alert-success" style="width: 160px; float: right; margin-right: 20px; margin-top: 30px;" role="alert"><b>Added to Wishlist</b></div>
<?php
			}
?>

<!DOCTYPE html>
<html>
<head>
	<title> <?php echo "$r[1]"; ?></title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="book_demo_css.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <?php
        include 'includes/header.php';
    ?>
</head>

	<?php
		if(isset($_REQUEST['id'])){
		$qry = "select * from items where id='$_REQUEST[id]'";

		$res = mysqli_query($con,$qry);
		echo "<br><br><br>";
		if(mysqli_affected_rows($con)>0){
			while($r=mysqli_fetch_array($res,MYSQLI_NUM)){
	?>

<body>
  <br><br>
  <div class="col-sm-3">
    <div class="thumbnail">
    <br><br>  <?php
        echo "<img src ='images/$r[5]'>";
       ?><br><br>
    </div>
  </div>



<div class="col-md-6" style="padding-bottom: 20px;">
	<div style="border-bottom: solid; padding-bottom: 20px;">
		<h2 style="font: Amita"><?php echo "$r[2]"; ?></h2>
		<h3><?php echo "$r[1]"; ?> </h3>
		<b style= 'font: 24px'>Rating:</b> <button type='button' class='btn btn-success'style='border-radius: 50%'><b><?php echo "$r[6]"; ?>  </b> <span class="glyphicon glyphicon-star"></span></button>
	</div>

	<div>
    <center>
		  <div class="top">
		    <span class="dot" style="background:#000;"></span>
		    <span class="dot" style="background:#454545;"></span>
		    <span class="dot" style="background:#999999;"></span>
	 	 </div>
   </center>
		  <div class="content" style="margin-left:200px;">
        <center>
        <div class="col-md-3" style="border-right: solid;">
		  		<h2>Price</h2>
		  		<strong><p> <i class="fa fa-inr"></i> <?php echo "$r[4]"; ?> </p></strong>
		  	</div>

		  	<div class="col-md-3" ">
		  		<h2>M.R.P</h2>
		  		<strong><p><i class="fa fa-inr"></i> <strike><?php echo "$r[3]"; ?></strike> </p></strong>
		  	</div>
      </center>

		  </div>
	</div>
</div>
<br><br><br>
  <div class="col-md-3">


    <div class="panel panel-success" style="box-shadow: 0 0px 0px 0 rgba(0,0,0,0.24), 0 0px 0px 0 rgba(0,0,0,0.19); margin-top: 25px;">

            <div class="panel-body">
            	<center>
            		<?php
  				          echo"<form method='get'>
  				              <a href='cart-add.php?option=buy&id=$r[0]'><button type='button' class='btn btn-sm btn-danger' name='add' type='submit' value='BUY' style='height: 40px; width: 200px; margin-top: 30px; border-radius: 50px; background-color: green;' ><b>BUY</b></button><br></a>
  				              <a href='wishlist_add.php?option=borrow&id=$r[0]'><button type='button' class='btn btn-sm btn-primary' name='add' type='submit' value='BORROW' style='height: 40px; width: 200px; margin-top: 20px; border-radius: 50px; background-color: red;'><b>Add to Wishlist</b></button><br></a>
  				          </form>";
  				?>
  				<h5><b>Cash on Delivery</b> eligible.</h5>
            		<h5 style="color: #008b00"><b>In Stock</b></h5>

  			</center>
      </div>
  </div>
<br><br><br>
  </div>
<div class="container-fluid">
  <center>
    <h4 style="font-family: 'Aclonica'; ">About <?php echo "$r[1]"; ?>:</h4>
  </center>
    <strong><h5><?php echo "$r[8]"; ?>  </h5></strong><br>
    <br><br>
    <center>
    <h4 style="font-family: 'Aclonica'; ">More about <?php echo "$r[1]"; ?></h4>
  </center>
    <strong><h5><?php echo "$r[7]"; ?> </h5></strong>
</div>


<br><br><br>
</div>
<?php
				}
			}
			}
			?>
<br><br><br>
</body>

    <?php
        include 'includes/foot.php';
        include 'includes/footer.php';
    ?>


</html>
