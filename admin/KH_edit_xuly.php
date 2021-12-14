<?php 
$ma = $_POST["txtMa"];
$ten = $_POST["txtname"];
$user= $_POST["txtuser"];
$pass= $_POST["txtpass"];
$phone= $_POST["txtphone"];
$email= $_POST["txtemail"];
$diachi= $_POST["txtdiachi"];
$gt= $_POST["sex"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project");
mysqli_set_charset($conn,'UTF8');

$strSelect = "update dang_ki set  ten='$ten',user='$user',pass='$pass' ,sdt=$phone,email='$email',diachi='$diachi' ,gioitinh='$gt' where Code=$ma";
mysqli_query($conn,$strSelect);
mysqli_close($conn);
header("Location:KH_list.php");
?>