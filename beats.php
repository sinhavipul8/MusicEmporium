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
	<title> Beats Speakers and Headphones	</title>

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
      <img class="bg" src="images/beatshome.jpg" /  style="margin-top : 31px; width: 100%">
    </div>
    <br>
    <div class="container-fluid text-center bg-grey">
  <h2>Speakers and Headphones</h2><br><br>
  <div class="row text-center">
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="item.php?id=1"><img src="images/beats1.jpg" alt="Beats EP ML9D2ZM/A"></a>
        <p><strong>Beats EP ML9D2ZM/A</strong></p>
        <br><strong><p> <i class="fa fa-inr"></i> 7,252 </p></strong><br>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="item.php?id=11"><img src="images/beatshome2.jpg" alt="Beats Pill+"></a>
        <p><strong>Beats Pill+</strong></p>
        <strong><p> <i class="fa fa-inr"></i> 14,700 </p></strong>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="item.php?id=10"><img src="images/beatshome1.jpg" alt="Beats Studio3"></a>
        <p><strong>Beats Studio3</strong></p>
        <strong><p> <i class="fa fa-inr"></i> 49,999 </p></strong>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <br><br><a href="item.php?id=15"><img src="images/beatshome6.jpg" alt="Beats Studio"></a><br><br>
        <br><p><strong>Beats Studio</strong></p>
        <strong><p> <i class="fa fa-inr"></i> 29,990 </p></strong>
      </div>
    </div>
</div>
</div>
<br><br>

<div class="container-fluid text-center bg-grey">
  <div class="row text-center">
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="item.php?id=13"><img src="images/beatshome4.jpg" alt="Beats Solo 3"></a><br>
        <p><strong>Beats Solo 3</strong></p>
        <strong><p> <i class="fa fa-inr"></i> 23,377 </p></strong>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="item.php?id=14"><img src="images/beatshome5.jpg" alt="Beats Solo HD"></a><br>
        <p><strong>Beats Solo HD</strong></p>
        <strong><p> <i class="fa fa-inr"></i> 15,999 </p></strong>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <a href="item.php?id=12"><img src="images/beatshome3.jpg" alt="Beats Pill 2.0"></a>
        <p><strong>Beats Pill 2.0</strong></p>
        <strong><p> <i class="fa fa-inr"></i> 42,095 </p></strong>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <br><br><a href="item.php?id=16"><img src="images/beatshome7.jpg" alt="Beats Solo3"></a>
        <br><br><br><p><strong>Beats Solo3</strong></p>
        <strong><p> <i class="fa fa-inr"></i> 22,300 </p></strong>
      </div>
    </div>
  </div>
</div>
<div class="jumbotron">
  <div class="container text-center">
    <h2>About Beats</h2>
    <p style="font-size: 15px;">For more than 60 years, the Beats brand has delivered products that exemplify the technology and expertise gained through our leadership in professional sound reproduction. The JBL name has been synonymous with the precise, naturally articulated sound found in many of the world's most prestigious locations, including clubs, cinemas and recording studios, and live-music reinforcement in venues ranging from concert halls to outdoor stadiums. We've taken this expertise and applied it to exciting audio products for your home, car, portable media player, boat, computer and gaming systems. Whatever and wherever, the Beats brand is the one that audio consumers trust because it's the brand audio professionals rely on. If great sound matters, there is a JBL solution with your name on it.</p>
  </div>
</div>
</body>

    <?php
       include 'includes/foot.php';
       include 'includes/footer.php';
    ?>
</html>
