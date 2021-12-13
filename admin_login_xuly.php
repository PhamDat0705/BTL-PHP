<?php 
session_start();
$uid = $_POST["txtUID"];
$pwd = $_POST["txtPWD"];
include("open.php");
$query = "select * from admin where username = '$uid' and pass='$pwd'";
$result = mysqli_query($conn,$query);
$check = false;
if(mysqli_num_rows($result)>0)
{
	$row = mysqli_fetch_array($result);
	$_SESSION["ma"] = $row["ma"];
	$_SESSION["uid"] =$uid ;
	$check = true;
}
include("close.php");
if($check)
	header("Location:admin_page.php");
else
	header("Location:admin_login.php");	
?>