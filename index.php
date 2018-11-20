
<!DOCTYPE html>
<html>
<title>Music Emporium</title>
<head>

  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">


<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Lato);
@import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);

ul {
    padding:50;
    list-style:  circle ;
}

.social-icon {
    color: #fff;
}

.social-icons li {
    vertical-align: top;
    display: inline;
    height: 100px;
}
.social-icons a {
    color: #fff;
    text-decoration: none;
}
.fa-facebook {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-facebook:hover {
    background-color: #3d5b99;
}
.fa-twitter {
    padding:10px 12px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-twitter:hover {
    background-color: #00aced;
}

.fa-youtube {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-youtube:hover {
    background-color: #e64a41;
}
.fa-linkedin {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-linkedin:hover {
    background-color: #0073a4;
}
</style>



<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: inherit;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("images/wallpaper/mic.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("images/wallpaper/sp.jpg");
  min-height: 400px;
}
.bgimg-3 {
  background-image: url("images/wallpaper/mic.jpg");
  min-height: 100%;
}

.caption {
  position: absolute;
  left: 0;
  top: 20%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 25px;
  font-size: 40px;
  letter-spacing: 14px;
}
.caption1 {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption1 span.border1 {
  background-color: #111;
  color: #fff;
  padding: 15px;
  font-size: 14px;
  letter-spacing: 8px;
}
.caption2 {
  position: absolute;
  left: 0;
  top: 75%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption2 span.border2 {
  background-color: #111;
  color: #fff;
  padding: 15px;
  font-size: 20px;
  letter-spacing: 10px;
}
.caption2 span.border2:hover{
  background: green;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
</head>
<body>

<div class="bgimg-1">
  <div class="caption">
    <span class="border" style="margin-right: 110px;">MUSIC EMPORIUM</span>
  </div>
  <div class="caption1">
    <span class="border1" style="margin-right: 110px;">BEST SPEAKERS AND HEADPHONES</span>
  </div>
  <div class="caption2">
    <a href="signup.php"><span class="border2" style="margin-right: 100px">SHOP NOW</span></a>
  </div>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <center>
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/wallpaper/sen1.jpg" alt="Sennheiser">
    </div>

    <div class="item">
      <img src="images/wallpaper/jbllogo1.jpg" alt="JBL">
    </div>

    <div class="item">
      <a href="item.php?id=2"><img src="images/wallpaper/beats.jpg" alt="Beats">
    </div>
  </div>
</center>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">About Music Emporium! </h3>

<p> MUSIC EMPORIUM is a shop for all the music lovers. We provide the best speakers and headphones at the lowest price. All you need is to sign up and you will be all set to buy an item. </p>
</div>
<!--<div class="bgimg-2">

</div>-->

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p style="margin-left: 100px; margin-right: 100px;"><center>Live your truth. Express your love. Share your enthusiasm. Take action towards your dreams. Walk your talk. Dance and sing to your music. Embrace your blessings. Make today worth remembering.</center></p>
    <p style="margin-left: 800px;">~Steve Maraboli</p>
  </div>
</div>
<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <h3 style="margin-left: 500px; color: #ffffff;"><br>Follow us on: </h3><br>
        <div style="margin-left: 505px;">
          <ul class="social-icons">
              <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
              <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
              <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>

  </div>
</div>
</body>
  <?php

    include 'includes/footer.php';
  ?>
</html>
