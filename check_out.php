<?php
if (!isset($_SESSION["user"])){
	header("Location:dangnhap.php");
}
else
	header("Location:dat_hang.php");
?>