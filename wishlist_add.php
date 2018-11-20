<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
	echo $_GET['id'];
	//$p = $_REQUEST['option'];
	//var_dump($p);
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    echo $_REQUEST['option'];
    $query = "INSERT INTO wishlist(user_id, item_id) VALUES('$user_id', '$item_id')";
    $res = mysqli_query($con, $query) or die(mysqli_error($con));
    header("location: item.php?id=$_REQUEST[id]&wish=done");
}
?>
