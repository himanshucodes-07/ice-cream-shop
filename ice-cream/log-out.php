<?php 
session_start();
include('database-conn.php');
$_SESSION['login'] = '';
//date_default_timezone_set('Asia/Kolkata');
//$date=date('d-m-y h:i:s a', time());
//mysqli_query($conn,"update userlog set logout='$date' where uid='".$_SESSION['id']."'  order by id desc limit 1");
//session_unset();
session_destroy();
$_SESSION["errmsg"] = "Successfully Logout";
header("location: index.html");
?>