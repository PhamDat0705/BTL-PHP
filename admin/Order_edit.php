<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
$Code = $_GET["tinh_trang"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project");
mysqli_set_charset($conn,'UTF8');
$strSelect = "select * from tinh_trang where tinh_trang=$Code";
$result = mysqli_query($conn,$strSelect);
$row = mysqli_fetch_array($result);

?>
<div align="left"><button><a href="Order_list.php" style="text-decoration:none; color: black" ><img src="../anh/logout.png" width="25px" height="25px">Quay Về</a></button></td></div>
<form method="post" action="Order_edit_xuly.php">
<center>
<fieldset style="height: 350px;width: 350px;">
			<legend><h1><font color="#C81316">Cập nhật tình trạng</font></h1></legend>
	<table>
		
		<tr>
			<td> Mã:</td>
			<td><input type="text" name="txtMa"  value="<?php echo($Code) ?>"/></td>
		</tr>
		<tr>
			<td>Mã loại :</td>
			<td><select name="txtmaloai" id="txtmaloai">
				<option value="0">--Chọn loại tình trạng--</option>
                <?php 
				$strSelect1 = "select * from tinh_trang";
				$result1 = mysqli_query($conn,$strSelect1);
				while($row = mysqli_fetch_array($result1))
				{
				?>
                <option value="<?php echo $row["ma"]; ?>"><?php echo $row["tinh_trang"]; ?></option>
                <?php 
				}
				?>
			</select></td>
		</tr>
		
		<tr>
			<td colspan="2"><center><input type="submit" onclick="return validateForm()" value="Cập Nhật"/></center></td>
		</tr>
		
</tabe>

</fieldset>
</center>
</form>
<?php 
mysqli_close($conn);
?>
</body>
</html>