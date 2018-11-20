<!DOCTYPE html>
<html>
<head>
  <title>Music Emporium| Payment Page</title>

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

//echo "$_SESSION[user_id]";
$pay=$_REQUEST['pay'];
//echo "$_REQUEST[pay]";
//echo "$pay";

    $query = "INSERT INTO payment(user_id, pay)VALUES('" . $_SESSION['user_id'] . "','" . $pay . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
?>

<div class="container-fluid">
<br><br><br><br>

<div class="success" style="background-color: #ddffdd; border-left: 6px solid #4CAF50; width: 400px; border-radius: 5px; margin-left: 100px;">
  <h3><strong>&nbsp Total payable amount: Rs. </strong> <?php echo"$pay" ?></h3>
</div>

   <div class="col-md-8" style="margin-top: 50px; margin-left: 200px; margin-bottom: 50px;" >
            <!--<div class="thumbnail" style="height: 370px;" id="box">
                  <div class="col-md-4" >
                    <div class="thumbnail" style="height: 290px; " id="box">
                    <center><p><b><i>We accept:</i></b></p></center>
                  <div class="col-md-4">
                    <img src="images/payment/card1.png" class="thumbnail" style="height: 50px; " alt="Responsive Image">
                    <img src="images/payment/card2.png" class="thumbnail" style="height: 50px;" alt="Responsive Image">
                    <img src="images/payment/card3.png" class="thumbnail" style="height: 50px;" alt="Responsive Image">
                  </div>
                  <div class="col-md-4">
                    <img src="images/payment/card4.jpg" class="thumbnail" style="height: 50px;" alt="Responsive Image">
                    <img src="images/payment/card5.jpg" class="thumbnail" style="height: 50px;" alt="Responsive Image">
                    <img src="images/payment/card6.png" class="thumbnail" style="height: 50px;" alt="Responsive Image">
                  </div>
                  </div>
                </div>-->

                <div class="jumbotron" style="margin-left :18%">
                         <form class="form-inline">
                          <div class="form-group"><br>

                            <label for="number">Card Number:</label>&nbsp
                            <input type="text" class="form-control" pattern=".{4,}" required = "true" style="width: 80px;">&nbsp
                            <input type="text" class="form-control" pattern=".{4,}" required = "true" style="width: 80px;">&nbsp
                            <input type="text" class="form-control" pattern=".{4,}" required = "true" style="width: 80px;">&nbsp
                            <input type="text" class="form-control" pattern=".{4,}" required = "true" style="width: 80px;">
                          
                          </div>
                        </form>
                        <br>

                          <div class="form-group">
                            <label for="pwd">Full Name (as in the card):</label>
                            <input type="text" class="form-control" id="name">
                          </div>

                          <div class="form-group">
                            <div class="col-md-6">
                            <label for="pwd">CVV Number</label>
                            <input type="password" class="form-control" id="cvv" style="width: 50px;">
                          </div><i>Find your cvv number from the back of your card.</i>
                          <div class="col-md-6">
                            <img src="images/payment/cvv.png" class="thumbnail" style="height: 60px; " alt="Responsive Image">
                          </div>
                          </div>
                          <div>
                            <a href="success.php"><button type="button" class="btn btn-primary btn-block" id="button1" style="color: #ffffff; background-color: #000000;"><b>Make Payment &nbsp &nbsp<span class="glyphicon glyphicon-transfer"></span></b></button></a>
                          </div>
                </div>
             </div>
  </div>
</div>

<style>
  #button1:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);}

  #box{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);}
</style>


  <?php
  include 'includes/foot.php';
  include 'includes/footer.php';
 ?>

</body>
</html>
