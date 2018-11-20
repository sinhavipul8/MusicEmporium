<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
	echo $_GET['id'];
	$p = $_REQUEST['option'];
	var_dump($p);
    $item_id = $_GET['id'];
    //setcookie("cookie_name", null,-1,'/'/* time() - 3600*/);
    $user_id = $_SESSION['user_id'];
    echo $_REQUEST['option'];
    $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', '$_REQUEST[option]')";
    $res = mysqli_query($con, $query) or die(mysqli_error($con));
    header("location: item.php?id=$_REQUEST[id]&status=done");
}
?>
