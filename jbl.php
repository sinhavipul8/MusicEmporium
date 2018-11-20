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
	<title> JBL Speakers and Headphones	</title>

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
      <img class="bg" src="images/jblhome.jpg" /  style="margin-top : 31px; width: 100%">
    </div>
    <br>
    <div class="container-fluid text-center bg-grey">
  <h2>Speakers and Headphones</h2><br><br>
  <div class="row text-center">
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="item.php?id=3"><img src="images/jblhome1.jpg" alt="JBL E55BT"></a>
        <p><strong>JBL E55BT Signature</strong></p>
        <strong><p> <i class="fa fa-inr"></i> 6,353 </p></strong>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="item.php?id=4"><img src="images/jblhome2.jpg" alt="JBL T450BT"></a>
        <p><strong>JBL T450BT Extra Bass</strong></p>
        <strong><p> <i class="fa fa-inr"></i> 3,015 </p></strong>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="item.php?id=5"><img src="images/jblhome3.jpg" alt="JBL Go"><br></a>
        <p><strong>JBL GO Portable</strong></p>
        <strong><p> <i class="fa fa-inr"></i> 1,799 </p></strong>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="item.php?id=6"><img src="images/jblhome4.jpg" alt="JBL Flip 4"></a>
        <p><strong>JBL Flip 4 Portable Wireless</strong></p>
        <strong><p> <i class="fa fa-inr"></i> 7,699 </p></strong>
      </div>
    </div>
</div>
</div>
<br><br>

<div class="container-fluid text-center bg-grey">
  <div class="row text-center">
    <div class="col-sm-3">
      <div class="thumbnail">
        <br><br><a href="item.php?id=7"><img src="images/jblhome5.jpg" alt="JBL Charge 3"></a><br><br>
        <br><p><strong>JBL Charge 3</strong></p>
        <strong><p> <i class="fa fa-inr"></i> 10,377 </p></strong>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="item.php?id=2"><img src="images/jbls.jpg" alt="JBL Clip 2"></a><br><br>
        <p><strong>JBL Clip 2 Portable Bluetooth Speaker</strong></p>
        <strong><p> <i class="fa fa-inr"></i> 3,249 </p></strong>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <br><br><a href="item.php?id=8"><img src="images/jblhome6.jpg" alt="JBL Charge 2"></a><br><br>
        <br><p><strong>JBL Charge 2</strong></p>
        <strong><p> <i class="fa fa-inr"></i> 7,908 </p></strong>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="item.php?id=9"><img src="images/jblhome7.jpg" alt="JBL T450"></a>
        <p><strong>JBL T450</strong></p>
        <strong><p> <i class="fa fa-inr"></i> 1,690 </p></strong>
      </div>
    </div>
  </div>
</div>
<div class="jumbotron">
  <div class="container text-center">
    <h2>About JBL</h2>
    <p style="font-size: 15px;">For more than 60 years, the JBL brand has delivered products that exemplify the technology and expertise gained through our leadership in professional sound reproduction. The JBL name has been synonymous with the precise, naturally articulated sound found in many of the world's most prestigious locations, including clubs, cinemas and recording studios, and live-music reinforcement in venues ranging from concert halls to outdoor stadiums. We've taken this expertise and applied it to exciting audio products for your home, car, portable media player, boat, computer and gaming systems. Whatever and wherever, the JBL brand is the one that audio consumers trust because it's the brand audio professionals rely on. If great sound matters, there is a JBL solution with your name on it.</p>
  </div>
</div>
</body>

    <?php
       include 'includes/foot.php';
       include 'includes/footer.php';
    ?>
</html>
