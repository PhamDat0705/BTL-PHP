<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script language="javascript">
function validateForm()
{
	var txtma = document.getElementById("txtma");
	var divMaError = document.getElementById("divMaError");
		if(txtma.value=="")
		{			
			alert("Tên sản phẩm không được để trống !");
			txtma.focus();
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
		padding-left:30px;s
		padding-top:40px
	}
</style>
</head>

<body>
<?php 
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project");
?>
<div align="left"><button><a href="../admin_page.php" style="text-decoration:none; color: black" ><img src="../anh/logout.png" width="25px" height="25px">Quay Về</a></button></td></div>
<form action="NSX_them_xuly.php" method="post">
<center>
<fieldset>
<legend><h1>Thêm nhà sản xuất</h1></legend>
<table>

		<tr>
			<td>Mã :</td>
			<td><input type="text"  name="txtma" id="txtma"/></td>
			<Td>
            	<div id="divMaError" ></div>
            </Td>
	</tr>
		<tr>
			<td>Tên nhà sản xuất :</td>
			<td><select name="txtmaloai" id="txtmaloai">
				<option value="0">--Chọn nhà sản xuất--</option>
                <?php 
				$strSelect1 = "select * from nha_san_xuat";
				$result1 = mysqli_query($conn,$strSelect1);
				while($row = mysqli_fetch_array($result1))
				{
				?>
                <option value="<?php echo $row["ma_nsx"]; ?>"><?php echo $row["ten_nsx"]; ?></option>
                <?php 
				}
				?>
			</select></td>
		</tr
<tr>
  		<center><td colspan="2"><input type="submit"  onclick="return validateForm()" value="Save" /></td></center></tr>
</table>
</fieldset>
</center>
<?php 
mysqli_close($conn);
?>
</body>

</html>