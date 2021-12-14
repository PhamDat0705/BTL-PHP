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
$str = "select * from hoa_don";
$query  = mysqli_query($conn,$str);
?>
<form>
<center><table border="1" cellspacing="0">
	<tr bgcolor="#A25455">
    	<td  height="30px"><font size="+2"><b>Mã đơn hàng</b></font></td>
        <td><font size="+2"><b>Mã khách hàng</b></font></td>
        <td><font size="+2"><b>Tên khách hàng</b></font></td>
        <td><font size="+2"><b>Số điện thoại người nhận</b></font></td>
        <td><font size="+2"><b>Địa chỉ người nhận</b></font></td>
        <td><font size="+2"><b>Thời gian</b></font></td>
		<td><font size="+2"><b>Tổng tiền</b></font></td>
		<td><font size="+2"><b>Tình trạng</b></font></td>
		<td><font size="+2"><b>Sửa tình trạng</b></font></td>
		
    </tr>
    <?php 
	while($row = mysqli_fetch_array($query))
	{
	?>
    <tr>
    	<td><?php echo $row["ma_hoa_don"]; ?></td>
        <td><?php echo $row["ma_khach_hang"]; ?></td>
        <td><?php echo $row["ten_nguoi_nhan"]; ?></td>
        <td><?php echo $row["sdt_nguoi_nhan"]; ?></td>
		<td><?php echo $row["dia_chi_nguoi_nhan"] ?></td>
		<td><?php echo $row["thoi_gian"]; ?></td>
		<td><?php echo $row["tong_tien"]; ?></td>
		<td><?php echo $row["tinh_trang"]; ?></td>
		
		<td><a href="Order_edit.php?tinh_trang=<?php echo $row["tinh_trang"]; ?>"><center><img src="../anh/logoedit.png" width="32px" height="32px"></center></a></td>
    </tr>
    <?php 
	}
	?>
	 <div align="left"><button><a href="../admin_page.php" style="text-decoration:none; color: black" ><img src="../anh/logout.png" width="25px" height="25px">Quay Về</a></button></td></div>
</center>
</form>
</table>
<?php 
mysqli_close($conn);
?>
</body>
</html>