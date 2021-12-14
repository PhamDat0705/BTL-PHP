<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script language="javascript">
function validateForm()
{
	var txtten = document.getElementById("txtten");
	var divTenError = document.getElementById("divTenError");
		if(txtten.value=="")
		{			
			alert("Tên sản phẩm không được để trống !");
			txtten.focus();
			return false;
		}
		else
		{
			divTenError.innerHTML = "";
		}
	var txtanh = document.getElementById("txtanh");
	var divAnhError = document.getElementById("divAnhError");
		if(txtanh.value=="")
		{			
			alert("Tên sản phẩm không được để trống !");
			txtanh.focus();
			return false;
		}
		else
		{
			divAnhError.innerHTML = "";
		}
	var txtgia = document.getElementById("txtgia");
	var divGiaError = document.getElementById("divGiaError");
		if(txtgia.value=="")
		{			
			alert("Giá sản phẩm không được để trống !");
			txtgia.focus();
			return false;
		}
		else
		{
			divGiaError.innerHTML = "";
			return true;
		}
	

}
</script>
<style type="text/css">
	form{
		width:35%;
		height:250px;
		margin:auto;
		padding-left:30px;
		padding-top:40px
	}
</style>
</head>

<body>
<?php 
$Code = $_GET["ma"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project");
$strSelect = "select * from tblsanpham where ma=$Code";
$result = mysqli_query($conn,$strSelect);
$row = mysqli_fetch_array($result);
?>
<div align="left"><button><a href="SP_list.php" style="text-decoration:none; color: black" ><img src="../anh/logout.png" width="25px" height="25px">Quay Về</a></button></td></div>
<form method="post" action="SP_edit_xuly.php">

<fieldset>
			<legend><h1><font color="#C81316">Cập nhật sản phẩm</font></h1></legend>
	<center><table>
		<tr>
			<td>Mã sản phẩm</td>
			<td><input type="text" name="txtMa" readonly="readonly" value="<?php echo $row["ma"]; ?>" /></td>
			<Td>
            	<div id="divTenError"></div>
            </Td>
		<tr>
			<td>Tên sản phẩm:</td>
			<td><input type="text"  name="txtten" id="txtten" value="<?php echo $row["ten"]; ?>"/></td>
			<Td>
            	<div id="divAnhError" ></div>
            </Td>
		</tr>
		<tr>
			<td>Ảnh :</td>
			<td><input type="text"  name="txtanh" id="txtanh" value="<?php echo $row["anh"]; ?>"/></td>
		</tr>
		<tr>
			<td>Giá :</td>
			<td><input type="text"  name="txtgia" id="txtgia" value="<?php echo $row["gia"]; ?>"/></td>
			<Td>
            	<div id="divGiaError" style="color:#F00"></div>
            </Td>
		</tr>
		<tr>
			<td>Mã loại :</td>
			<td><select name="txtmaloai" id="txtmaloai">
				<option value="0">--Chọn loại sản phẩm--</option>
                <?php 
				$strSelect1 = "select * from tblloai";
				$result1 = mysqli_query($conn,$strSelect1);
				while($row = mysqli_fetch_array($result1))
				{
				?>
                <option value="<?php echo $row["ma"]; ?>"><?php echo $row["loai"]; ?></option>
                <?php 
				}
				?>
			</select></td>
		</tr>
		<tr>
			<td>Mã nhà sản xuất :</td>
			<td><select name="txtmansx" id="txtmansx">
				<option value="0">--Chọn nhà sản xuất--</option>
                <?php 
				$strSelect2 = "select * from nha_san_xuat";
				$result2 = mysqli_query($conn,$strSelect2);
				while($row1 = mysqli_fetch_array($result2))
				{
				?>
                <option value="<?php echo $row1["ma_nsx"]; ?>"><?php echo $row1["ten_nsx"]; ?></option>
                <?php 
				}
				?>
			</select></td>
		</tr>	
		<tr>
			<td colspan="2"><center><input type="submit" onclick="return validateForm()" value="Cập Nhật"/></center></td>
		</tr>
		
</tabe>
</center>
</fieldset>
</form>
<?php 
mysqli_close($conn);
?>
</body>
</html>