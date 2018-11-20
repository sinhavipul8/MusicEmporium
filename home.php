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
	<title> Music Emporium | Home Page	</title>

		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Arbutus' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>

</head>

          <style>
      .food {
          position: relative;
          width: 50%;
      }

      .image {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
      }

      .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%)
      }

      #food:hover .image {
        opacity: 0.3;
      }

      #food:hover .middle {
        opacity: 1;
      }

      .text {
        background-color: white;
        color: white;
        font-size: 16px;
        padding: 16px 32px;
      }
      </style>
      .bg
      {
        z-index: 0;
        margin-left: 0px;
      }
      .thumbnail {
        padding: 0 0 15px 0;
        border: none;
        border-radius: 0;
      }

      .thumbnail img {
        width: 100%;
        height: 100%;
        margin-bottom: 10px;
      }

<body>
    <?php
      include 'includes/header.php';
    ?>
    <div>
      <img class="bg" src="images/home1.jpg" /  style="margin-top : 31px; width: 100%">
    </div>
    <br>
    <div class="container-fluid text-center bg-grey">
  <h2>Shop by Category</h2><br><br>
  <div class="row text-center">
    <div class="col-sm-5" style="margin-left: 100px;">
      <div class="thumbnail">
        <img src="images/bs.png" alt="Bluetooth speakers">
        <p><strong>Bluetooth Speakers</strong></p>
      </div>
    </div>
    <div class="col-sm-5">
      <div class="thumbnail">
        <img src="images/jb.png" alt="Headphones">
        <p><strong>Headphones</strong></p>
      </div>
    </div>
</div>
</div>
<br><br>
<div class="container-fluid text-center bg-grey">
<h2>Shop by Brand</h2><br><br>
<div class="row text-center">
<div class="col-sm-4">
  <div class="thumbnail">
    <br><br><img src="images/sen.png" alt="Sennheiser"><br><br><br>
  </div>
</div>
<div class="col-sm-4">
  <div class="thumbnail">
    <a href="beats.php"><img src="images/blogo.png" alt="Beats"></a>
  </div>
</div>
<div class="col-sm-4">
  <div class="thumbnail">
    <br><a href="jbl.php"><img src="images/jblogo.png" alt="JBL"></a><br>
  </div>
</div>
</div>
</div><br><br>
<div class="container-fluid text-center bg-grey">
<div class="row text-center">
<div class="col-sm-4">
  <div class="thumbnail">
    <br><img src="images/boselogo.png" alt="Bose">
  </div>
</div>
<div class="col-sm-4">
  <div class="thumbnail">
    <br><img src="images/sonylogo.png" alt="Sony"><br>
  </div>
</div>
<div class="col-sm-4">
  <div class="thumbnail">
    <br><br><img src="images/sclogo.png" alt="Skullcandy"><br>
  </div>
</div>
</div>
</div>
<div class = 'jumbotron'>
  <center>
    <h3><strong>Buy speakers and headphones online at Music Emporium</strong></h3><br><br>
    <p>Enjoy high-quality audio output with a stylish headset of your choice from Music Emporium. Choose from a variety of headphones from leading brands such as Sony, Sennheiser, Philips, Panasonic, Beats and more. Select from different types and colours and get great deals on headsets. Before choosing a headphone or speaker for yourself, it is important to consider the sound quality, the comfort level and the ambient noise cancelling features. At Music Emporium, you will find headphones in a range of attractive colours like red, blue, yellow, green, black, white and more. Designed to be compatible with most gadgets like MP3 players, mobile phones, laptops, tablets and more, these headphones and speakers always deliver an impressive performance. Our online store brings to you several popular brands such as Sennheiser, TDK, Skullcandy, HP, Samsung, iBall and more. Whether you are looking for foldable on-ear headphones or durable sports headphones online, Music Emporium is just where you should be. At Music Emporium you can effortlessly visit and access headphones and speakers of your choice and avail of the best deals.
  </center>
</div>
<br><br></body>

    <?php
       include 'includes/foot.php';
       include 'includes/footer.php';
    ?>
</html>
