<?php 
$name  = $_POST["txtten"];
$anh  = $_POST["txtanh"];
$gia  = $_POST["txtgia"];
$maloai  = $_POST["txtmaloai"];
$mansx  = $_POST["txtmansx"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project");
$strInsert = "insert into tblsanpham (ten,anh,gia,maloai,ma_nsx) values ('$name','$anh','$gia','$maloai','$mansx')";
mysqli_query($conn,$strInsert);
mysqli_close($conn);
echo "Đã thêm sản phẩm thành công";
?>