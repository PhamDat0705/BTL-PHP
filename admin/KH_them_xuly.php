<?php 
$ten = $_POST["txtname"];
$user= $_POST["txtuser"];
$pass= $_POST["txtpass"];
$phone= $_POST["txtphone"];
$email= $_POST["txtemail"];
$diachi= $_POST["txtdiachi"];
$gt= $_POST["sex"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project");
$strInsert = "insert into dang_ki (ten,user,pass,sdt,email,diachi,gioitinh) values ('$ten','$user','$pass',$phone,'$email','$diachi','$gt')";
mysqli_query($conn,$strInsert);
mysqli_close($conn);
header("Location:KH_list.php");	
?>