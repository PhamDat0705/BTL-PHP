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
			return true;
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
$Code = $_GET["ma_nsx"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project");
$strSelect = "select * from nha_san_xuat where ma_nsx=$Code";
$result = mysqli_query($conn,$strSelect);
$row = mysqli_fetch_array($result);
?>
<div align="left"><button><a href="NSX_list.php" style="text-decoration:none; color: black" ><img src="../anh/logout.png" width="25px" height="25px">Quay Về</a></button></td></div>
<form method="post" action="NSX_edit_xuly.php">

<fieldset>
	<legend><h1><font color="#C81316">Cập nhật NSX</font></h1></legend>
<center><table>
		<tr>
			<td>Mã sản phẩm</td>
			<td><input type="text" name="txtMa" readonly="readonly" value="<?php echo $row["ma_nsx"]; ?>" /></td>
			<Td>
            	<div id="divMaError"></div>
            </Td>
		<tr>
			<td>Tên sản phẩm:</td>
			<td><input type="text"  name="txtten" id="txtten" value="<?php echo $row["ten_nsx"]; ?>"/></td>
			<Td>
            	<div id="divTenError" ></div>
            </Td>
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