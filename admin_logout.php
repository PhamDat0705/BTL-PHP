<?php 
session_start();
$_SESSION["user"] = null;
header("Location:admin_login.php");
?>