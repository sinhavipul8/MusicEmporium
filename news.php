<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title> CARAVAN | Newsletter Page    </title>

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>

        <?php
        include 'includes/header.php';
      ?>
<br><br><br><br><br><br>

  <form action="news_script.php" method="POST" style="border: 4px solid #f1f1f1;">
  <div class="container">
    <h2>Subscribe to our Newsletter</h2>
  </div>

  <div class="container" style="background-color:white; padding: 20px; background-color: #f1f1f1;">
    <input type="text" placeholder="Name" name="name" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc;
    box-sizing: border-box;">
    <input type="text" placeholder="Email address" name="email" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc;
    box-sizing: border-box;">
  </div>

  <div class="container" style="background-color:white; padding: 20px; background-color: #f1f1f1;">
    <input type="submit" value="Subscribe" style="background-color: #4CAF50; color: white; border: none; width: 100px; height: 40px;">
  </div>
</form>

<br><br><br><br>

  <?php
  include 'includes/foot.php'; 
  include 'includes/footer.php'; 
 ?>

</body>
</html>
