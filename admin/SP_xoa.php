<?php 
$code = $_GET["ma"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project");
$strSelect = "delete from tblsanpham where ma=$code";
mysqli_query($conn,$strSelect);
mysqli_close($conn);
header("Location:SP_list.php");
?>