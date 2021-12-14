<?php 
$ma = $_POST["txtMa"];
$ten = $_POST["txtten"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project");
$strSelect = "update nha_san_xuat set ten_nsx='$ten' where ma=$ma_nsx";
mysqli_query($conn,$strSelect);
mysqli_close($conn);
header("Location:NSX_list.php");
?>