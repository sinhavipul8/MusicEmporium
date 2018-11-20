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
    <title> Music Emporium | Complain </title>

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

      <?php
        include 'includes/header.php';
      ?>
<br><br><br><br>

<h1 style="margin-left: 100px;">Complain:</h1>
  <div class="container" style="border-radius: 5px; background-color: #f2f2f2; padding: 20px;">
    <form action="complain_script.php" method="POST">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholde="Your name.." style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-top: 6px; margin-bottom: 16px; resize: vertical ">

      <label for="email">Email Address</label>
      <input type="text" id="email" name="email" placeholder="Your email address.." style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-top: 6px; margin-bottom: 16px; resize: vertical ">


      <label for="country">Country</label>
      <input type="text" id="country" name="country" placeholder="Name of your country" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-top: 6px; margin-bottom: 16px; resize: vertical ">


      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write about your grievances.." style="height:200px; width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-top: 6px; margin-bottom: 16px; resize: vertical "></textarea>

      <input type="submit" value="Submit" style="background-color: #4CAF50; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer;">

    </form>
  </div>
<br><br>
    <?php
     include 'includes/foot.php';
     include 'includes/footer.php';
    ?>
</body>
</html>
