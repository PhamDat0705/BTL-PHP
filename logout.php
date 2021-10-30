<?php 
session_start();
$_SESSION["user"] = null;
header("Location:main.php");
$_SESSION["giohang"] = null;
$_SESSION["ma"] = null;
?>