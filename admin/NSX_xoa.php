<?php 
$code = $_GET["ma_nsx"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project");
$strSelect = "delete from nha_san_xuat where ma_nsx=$code";
mysqli_query($conn,$strSelect);
mysqli_close($conn);
header("Location:NSX_list.php");
?>