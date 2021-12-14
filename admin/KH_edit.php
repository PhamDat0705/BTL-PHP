<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script language="javascript">
function validateForm()
{
	var txtname = document.getElementById("txtname");
	var divTenError = document.getElementById("divTenError");
		if(txtname.value=="")
		{			
			alert("Tên không được để trống !");
			txtname.focus();
			return false;
		}
		else
		{
			divTenError.innerHTML = "";
		}
	
	var txtuser = document.getElementById("txtuser");
	var divUserError = document.getElementById("divUserError");
		if(txtuser.value=="")
		{			
			alert("Tài khoản không được để trống !");
			txtuser.focus();
			return false;
		}
		else
		{
			divUserError.innerHTML = "";
		}
	var txtpass = document.getElementById("txtpass");
	var divPassError = document.getElementById("divPassError");
		if(txtpass.value=="")
		{			
			alert("Mật khẩu không được để trống !");
			txtpass.focus();
			return false;
		}
		else
		{
			divPassError.innerHTML = "";
		}
	var txtphone = document.getElementById("txtphone");
	var divPhoneError = document.getElementById("divPhoneError");
		if(txtphone.value=="")
		{			
			alert("Số điện thoại không được để trống !");
			txtphone.focus();
			return false;
		}
		else
		{
			divPhoneError.innerHTML = "";
		}
	var txtemail = document.getElementById("txtemail");
	var divEmailError = document.getElementById("divEmailError");
		if(txtemail.value=="")
		{			
			alert("Email không được để trống !");
			txtemail.focus();
			return false;
		}
		else
		{
			divEmailError.innerHTML = "";
		}
	var txtdiachi = document.getElementById("txtdiachi");
	var divDiachiError = document.getElementById("divDiachiError");
		if(txtdiachi.value=="")
		{			
			alert("Tên sản phẩm không được để trống !");
			txtdiachi.focus();
			return false;
		}
		else
		{
			divDiachiError.innerHTML = "";
			return true;
		}

}
</script>
</head>

<body>
<?php 
$Code = $_GET["Code"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project");
$strSelect = "select * from dang_ki where Code=$Code";
$result = mysqli_query($conn,$strSelect);
$row = mysqli_fetch_array($result);
?>
<div align="left"><button><a href="KH_list.php" style="text-decoration:none; color: black" ><img src="../anh/logout.png" width="25px" height="25px">Quay Về</a></button></div>
<form method="post" action="KH_edit_xuly.php">
<fieldset>
	<legend><h1><font color="#C81316">Cập nhật thông tin khách hàng</font></h1></legend>
	<center><table>
		<tr>
			<td>Mã</td>
			<td><input type="text" name="txtMa" readonly="readonly" value="<?php echo $row["Code"]; ?>" /></td>
		</tr>
		<tr>
			<td>Họ tên :</td>
			<td><input type="text"  name="txtname" id="txtname" value="<?php echo $row["ten"]; ?>"/></td>
			<Td>
            	<div id="divTenError"></div>
            </Td>
	</tr>
		</tr>
		<tr>
			<td>User name :</td>
			<td><input type="text"  name="txtuser" id="txtuser" value="<?php echo $row["user"]; ?>"/></td>
			<Td>
            	<div id="divUserError"></div>
            </Td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="text"  name="txtpass" id="txtpass" value="<?php echo $row["pass"]; ?>"/></td>
			<Td>
            	<div id="divPassError"></div>
            </Td>
		</tr>
		<tr>
			<td>Số điện thoại :</td>
			<td><input type="text"  name="txtphone" id="txtphone" value="<?php echo $row["sdt"]; ?>"/></td>
			<Td>
            	<div id="divPhoneError"></div>
            </Td>
		</tr>
		<tr>
 			<td>Email :</td>
			<td><input type="text"  name="txtemail" id="txtemail" value="<?php echo $row["email"]; ?>"/></td>
			<Td>
            	<div id="divEmailError"></div>
            </Td>
		</tr>
		<tr>
 			<td>Địa chỉ :</td>
			<td><input type="text"  name="txtdiachi" id="txtdiachi" value="<?php echo $row["diachi"]; ?>"/></td>
			<Td>
            	<div id="divDiachi	Error"></div>
            </Td>
		</tr>
		
		<tr>
			<td >Giới tính :</td>
    		<td><input type="radio" name="sex" value="1" checked="checked"  />Nam
   			 <input type="radio" name="sex" value="0" <?php if($row["gioitinh"]==false) echo "checked='checked'"; ?> />Nữ
			</td>
		</tr>
<tr><td colspan="2"><center><input type="submit" onclick="return validateForm()" value="Cập Nhật"/></center></td></tr>
</tabe>
</center>
</fieldset>
</form>
<?php 
mysqli_close($conn);
?>
</body>
</html>