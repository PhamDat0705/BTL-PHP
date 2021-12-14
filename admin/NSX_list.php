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
$strSelect = "select * from nha_san_xuat";
$result = mysqli_query($conn,$strSelect);
?>
<center><table border="1" cellspacing="0">
	<tr bgcolor="#A25455">
    	<td  height="30px"><font size="+2"><b>Mã</b></font></td>
        <td><font size="+2"><b>Tên nhà sản xuất</b></font></td>
		<td><font size="+2"><b>Xóa </b></font></td>
		<td><font size="+2"><b>Sửa thông tin</b></font></td>

    </tr>
    <?php 
	while($row = mysqli_fetch_array($result))
	{
	?>
    <tr>
    	<td><?php echo $row["ma_nsx"]; ?></td>
        <td><?php echo $row["ten_nsx"]; ?></td>
		<td><a href="NSX_xoa.php?ma_nsx=<?php  echo $row["ma_nsx"]; ?>" onclick="return confirm('Bạn có chắc muốn xóa nhà sản xuất này')"><center><img src="../anh/logoxoa.png" width="40px" height="40px"></center></a></td>
		<td><a href="NSX_edit.php?ma_nsx=<?php  echo $row["ma_nsx"]; ?>"><center><img src="../anh/logoedit.png" width="42px" height="42px"></center></a></td>
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