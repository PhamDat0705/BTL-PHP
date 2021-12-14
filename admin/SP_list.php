<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project");
$strSelect = "select * from tblsanpham";
$result = mysqli_query($conn,$strSelect);
?>
<center><table border="1" cellspacing="0">
	<tr bgcolor="#A25455">
    	<td  height="30px"><font size="+2"><b>Mã</b></font></td>
        <td><font size="+2"><b>Tên sản phẩm</b></font></td>
        <td><font size="+2"><b>Ảnh</b></font></td>
        <td><font size="+2"><b>Giá</b></font></td>
        <td><font size="+2"><b>Mã loại</b></font></td>
        <td><font size="+2"><b>Mã nhà sản xuất</b></font></td>
		<td><font size="+2"><b>Xóa sản phẩm</b></font></td>
		<td><font size="+2"><b>Sửa thông tin</b></font></td>

    </tr>
    <?php 
	while($row = mysqli_fetch_array($result))
	{
	?>
    <tr>
    	<td><?php echo $row["ma"]; ?></td>
        <td><?php echo $row["ten"]; ?></td>
        <td><img src="<?php echo "../anh/".$row["anh"];?>" style="width:200px;height:200px"/></td>
        <td><?php echo $row["gia"]; ?></td>
		<td><?php echo $row["maloai"]; ?></td>
		<td><?php echo $row["ma_nsx"]; ?></td>
		<td><a href="SP_xoa.php?ma=<?php  echo $row["ma"]; ?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này')"><center><img src="../anh/logoxoa.png" width="40px" height="40px"></center></a></td>
		<td><a href="SP_edit.php?ma=<?php  echo $row["ma"]; ?>"><center><img src="../anh/logoedit.png" width="42px" height="42px"></center></a></td>
    </tr>
    <?php 
	}
	?>
	 <div align="left"><button><a href="../admin_page.php" style="text-decoration:none; color: black" ><img src="../anh/logout.png" width="25px" height="25px">Quay Về</a></button></td></div>
</table>
</center>
<?php 
mysqli_close($conn);
?>
</body>
</html>