<?php 
$ma = $_POST["txtMa"];
$ten = $_POST["txtten"];
$anh= $_POST["txtanh"];
$gia= $_POST["txtgia"];
$maloai= $_POST["txtmaloai"];
$mansx= $_POST["txtmansx"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project");
$strSelect = "update tblsanpham set ten='$ten',anh='$anh',gia='$gia' ,maloai='$maloai' ,ma_nsx='$mansx' where ma=$ma";
mysqli_query($conn,$strSelect);
mysqli_close($conn);
header("Location:SP_list.php");
?>