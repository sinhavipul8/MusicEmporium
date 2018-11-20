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
	<title> Music Emporium | Profile	</title>

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


    	<div class="container-fluid">

        <?php
        	$user_id = $_SESSION['user_id'];
        	$qry = "SELECT * from users WHERE id='$user_id' ";
   			$res = mysqli_query($con, $qry)or die($mysqli_error($con));
   			    if(mysqli_affected_rows($con)>0){
			while($r=mysqli_fetch_array($res,MYSQLI_NUM)){
  ?>


<?php
if ($r[10]== NULL || $r[9]== NULL || $r[7]== NULL) {
?>
			  <div class="col-md-10" style="margin-left: 100px; margin-top: 80px;" >
          		  <div class="thumbnail" style="height: 650px; box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); padding: 10px 30px 10px 30px;">

            	<h4><b>Name:</b> <?php echo "$r[1]"; ?></h4>
            	<h4><b>Email Address:</b> <?php echo "$r[2]"; ?></h4>
            	<h4><b>Contact Number:</b> <?php echo "$r[4]"; ?></h4>
            	<h4 style="border-bottom: solid; padding-bottom: 10px;"><b>City, State:</b> <?php echo "$r[5]"; ?>,<?php echo "$r[6]"; ?> </h4><br><br>


                      <form method="post" enctype="multipart/form-data">
                         <label >Upload your Image:</label>
                         <input type="file" name="myfile"/><br>
                         <input type="submit" name="upload" value="Upload File"/>
                        </form>
                        <?php
                        if(isset($_REQUEST['getinfo']))
                        {
                            echo "File Name : ".$_FILES['myfile']['name']."<br>";
                            echo "File Size : ".$_FILES['myfile']['size']."<br>";
                            echo "File type : ".$_FILES['myfile']['type']."<br>";
                            echo "File Error : ".$_FILES['myfile']['error']."<br>";
                            echo "Temp Name : ".$_FILES['myfile']['tmp_name']."<br>";
                        }
                         if(isset($_REQUEST['upload']))
                        {
                             $source=$_FILES['myfile']['tmp_name'];
                             $des=$_SERVER['DOCUMENT_ROOT']."version_2.0/images/uploads/".$_FILES['myfile']['name'];
                             $p="images/uploads/".$_FILES['myfile']['name'];
                             if(move_uploaded_file($source,$des))
                             {
                                $query = "update users set profile=\"$p\" where id=$_SESSION[user_id]";
                                $result = mysqli_query($con, $query)or die(mysqli_error($con));
                                // header('location: profile.php');

                             }
                            else
                                {
                                    echo "file not uploaded";
                                }
                        }

                        ?>

            	<form action="profile_update.php" method="post" style="margin-top: 30px;">
            	    <label >Delivery Address</label>
      			    <textarea id="subject" name="address" placeholder="Share your primary address.." style="height:100px; width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-top: 6px; margin-bottom: 16px; resize: vertical "></textarea>

            		<label>Landmark</label>
      				<input type="text" id="country" name="landmark" placeholder="A landmark near your address" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-top: 6px; margin-bottom: 16px; resize: vertical ">

			      <label>Contact Number (for Delivery)</label>
			      <input type="text" id="country" name="phone" placeholder="Contact Number" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-top: 6px; margin-bottom: 16px; resize: vertical ">

            		<input type="submit" value="Submit" style="background-color: #4CAF50; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer;">

            	</form>
<?php
}else{
	?>
				  <div class="col-md-8" style="margin-left: 150px; margin-top: 100px; margin-bottom: 100px;" >
          		  <div class="thumbnail" style="height: 340px; box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); padding: 10px 30px 10px 30px;">
          		  	<div class="col-md-8">
		            	<h4><b>Name:</b> <?php echo "$r[1]"; ?></h4>
		            	<h4><b>Email Address:</b> <?php echo "$r[2]"; ?></h4>
		            	<h4><b>Contact Number:</b> <?php echo "$r[4]"; ?></h4>
		            	<h4><b>City, State:</b> <?php echo "$r[5]"; ?>,<?php echo "$r[6]"; ?> </h4>

						<h4><b>Address:</b> <?php echo "$r[7]"; ?></h4>
		            	<h4><b>Landmark:</b> <?php echo "$r[8]"; ?></h4>
		            	<h4><b>Contact Number (for Delivery):</b> <?php echo "$r[9]"; ?></h4>
		            </div>
		            <div class="col-md-4">

                    <div><img class='thumbnail' src='<?php echo "$r[10] "; ?>' style= 'height: 300px; width: 260px;'></div>";



            		</div>

 <?php
}
?>
            </div>
        </div>


<?php
}
}
?>
</div>

    </body>

	<?php
        include 'includes/foot.php';
        include 'includes/footer.php';
    ?>

</html>
