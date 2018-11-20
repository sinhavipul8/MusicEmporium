<?php
require("includes/common.php");
?>

<?php
if (!isset($_SESSION['user_id'])) {
  header('location: redirect.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Music Emporium | Buy Cart</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="indexcss.css">
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?><br><br>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                    <br><br><br><br>

                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT * from users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='buy'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                  <strong>  <th>Product</th>
                                    <th>Product Name</th>
                                    <th>Company</th>
                                    <th>Price</th>
                                    <th></th></strong>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["eprice"];
                                    $id = $row["id"] . ", ";
                                    $image = $row["image"];


                                    echo "<tr><td>";  echo"<img src='images/$image' style='height: 100px;'>" . "</td><td>" . $row["name"] ."</td><td>". $row["brand"] . "</td><td>Rs " . $row["price"] . "</td><td><a href='cart-remove.php?id={$row['id']}&status=buy' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='pay_script.php?itemsid=" . $id . "&pay="  . $sum ."' class='btn btn-primary'>Proceed</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            ?>
                            <div class="container-fluid"><br><br><br>
                              <center>
                                <div class="jumbotron" style="font-family: 'Acme'">
                                  <center>
                                    <h1>You have no items added to your cart.</h1><br>
                                    <h2>Add some first...</h2>
                                  </center>
                                </div>
                              </center>
                        </div><br><br>
                        <?php
                        }
                        ?>

                    </table>
                </div>
            </div>
        </div><br><br><br><br><br>

<?php
     include 'includes/foot.php';
        include 'includes/footer.php';
?>


    </body>
</html>
