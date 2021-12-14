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
mysqli_set_charset($conn,'UTF8');
	
$strSelect = "select * from dang_ki";
$result = mysqli_query($conn,$strSelect);
?>
<center><table border="1" cellspacing="0">
	<tr bgcolor="#A25455">
    	<td  height="30px"><font size="+2"><b>Mã</b></font></td>
        <td><font size="+2"><b>Tên khách hàng</b></font></td>
        <td><font size="+2"><b>Username</b></font></td>
        <td><font size="+2"><b>Password</b></font></td>
        <td><font size="+2"><b>Số điện thoại</b></font></td>
        <td><font size="+2"><b>Email </b></font></td>
		<td><font size="+2"><b>Địa chỉ</b></font></td>
		<td><font size="+2"><b>Giới tính</b></font></td>
		<td><font size="+2"><b>Xóa khách hàng</b></font></td>
		<td><font size="+2"><b>Sửa thông tin</b></font></td>
    </tr>
    <?php 
	while($row = mysqli_fetch_array($result))
	{
	?>
    <tr>
    	<td><?php echo $row["Code"]; ?></td>
        <td><?php echo $row["ten"]; ?></td>
        <td><?php echo $row["user"]; ?></td>
        <td><?php echo $row["pass"]; ?></td>
		<td><?php echo $row["sdt"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["diachi"]; ?></td>
		<td><?php echo $row["gioitinh"]; ?></td>
		<td><a href="KH_xoa.php?Code=<?php  echo $row["Code"]; ?>" onclick="return confirm('Bạn có chắc muốn xóa khách hàng này')"><center><img src="../anh/logoxoa.png" width="30px" height="30px"></center></a></td>
		<td><a href="KH_edit.php?Code=<?php  echo $row["Code"]; ?>"><center><img src="../anh/logoedit.png" width="32px" height="32px"></center></a></td>
    </tr>
    <?php 
	}
	?>
	 <div align="left"><button><a href="../admin_page.php" style="text-decoration:none; color: black" ><img src="../anh/logout.png" width="25px" height="25px">Quay Về</a></button></td></div>
</center>
</table>
<?php 
mysqli_close($conn);
?>
</body>
</html>