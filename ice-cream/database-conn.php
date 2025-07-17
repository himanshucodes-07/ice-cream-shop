<?php

$conn = mysqli_connect("localhost:3307", "root", "");
$db = mysqli_select_db($conn, "ice");

if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
function checklogin(){
if(strlen($_SESSION['login'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="index.html";		
		header("Location: http://$host$uri/$extra");
	}
}
?>