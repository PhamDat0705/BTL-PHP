<?php 
$ma = $_POST["ma_hoa_don"];
$code= $_POST["txtMa"];
$maloai= $_POST["txtmaloai"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project");
$strSelect = "update hoa_don set tinh_trang='$maloai' where ma=$ma";
mysqli_query($conn,$strSelect);
mysqli_close($conn);
header("Location:Order_list.php");
?>