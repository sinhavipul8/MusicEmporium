<!DOCTYPE html>
<html>
<head>
  <title>MUSIC EMPORIUM | About Us</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="indexcss.css">
</head>

<?php

require("includes/common.php");
include 'includes/header.php';
?>
<br><br><br><br><br>


<body>

<style>
  /* Three columns side by side */
.column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media (max-width: 650px) {
    .column {
        width: 100%;
        display: block;
    }
}

/* Add some shadows to create a card effect */
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
    padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
    content: "";
    clear: both;
    display: table;
}

.title {
    color: grey;
}

.button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 320px;
}

.button:hover {
    background-color: #555;
}
</style>
<div class="container">
  <H2><i><u>About us</u></i>:</H2>
  <div class="row">
  <div class="column">
    <div class="card" style="width: 350px;">
      <img src="images/wallpaper/fac1.jpg" alt="Jane" style="width:100%; height: 300px;">
      <div class="container">
        <h2>Vipul Sinha</h2>
        <p class="title">Developer</p>
        <p>Information Technology, KIIT University</p>
        <p>Email Address: sinhavipul8@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card" style="width: 350px;">
      <img src="images/wallpaper/fac2.jpg" alt="Mike" style="width:100%; height: 300px;">
      <div class="container">
        <h2>Uttaran Mondal</h2>
        <p class="title">Developer</p>
        <p>Information Technology, KIIT University</p>
        <p>Email Address: uttaranmondal@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card" style="width: 350px;">
      <img src="images/wallpaper/fac3.jpg" alt="Mike" style="width:100%; height: 300px;">
      <div class="container">
        <h2>Trishant Pahwa</h2>
        <p class="title">Developer</p>
        <p>Computer Science, KIIT University</p>
        <p>Email Address: trishantpahwa@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</div>

</body>

<br><br>
<?php
  include 'includes/foot.php';
  include 'includes/footer.php';
 ?>
</html>
