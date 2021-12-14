<?php 
$code = $_GET["Code"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project");
$strSelect = "delete from dang_ki where Code=$code";
mysqli_query($conn,$strSelect);
mysqli_close($conn);
header("Location:KH_list.php");
?>