<?php 
session_start();
$user = $_POST["txtUID"];
$pass = $_POST["txtPWD"];
include("open.php");
$query = "select * from dang_ki where user='$user' and pass = '$pass'";
$result = mysqli_query($conn,$query);
$soBanGhi = mysqli_num_rows($result);
$check = false;
if(mysqli_num_rows($result)>0)
{
	$row = mysqli_fetch_array($result);
	$_SESSION["ma"] = $row["Code"];
	$_SESSION["user"] =$user ;
	$_SESSION["pass"] =$pass ;
	$check = true;
}
include("close.php");
if($check)
	header("Location:main.php");
else
	header("Location:main.php?tem=17");
?>