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
<div align="left"><button><a href="../admin_page.php" style="text-decoration:none; color: black" ><img src="../anh/logout.png" width="25px" height="25px">Quay Về</a></button></td></div>
<form action="KH_them_xuly.php" method="post">
<div align="center"  >
<h1>Thêm Khách hàng</h1>
<fieldset>
<table>
	<tr>
			<td>Họ tên :</td>
			<td><input type="text"  name="txtname" id="txtname"/></td>
			<Td>
            	<div id="divTenError"></div>
            </Td>
	</tr>
	<tr>
			<td>User name :</td>
			<td><input type="text"  name="txtuser" id="txtuser"/></td>
			<Td>
            	<div id="divUserError"></div>
            </Td>
	</tr>
	<tr>
			<td>Password :</td>
			<td><input type="password"  name="txtpass" id="txtpass"/></td>
			<Td>
            	<div id="divPassError"></div>
            </Td>
	</tr>
			<td>Số điện thoại :</td>
			<td><input type="text"  name="txtphone" id="txtphone"/></td>
			<Td>
            	<div id="divPhoneError"></div>
            </Td>
	<tr>
 			<td>Email :</td>
			<td><input type="text"  name="txtemail" id="txtemail"/></td>
			<Td>
            	<div id="divEmailError"></div>
            </Td>

	</tr>
	<tr>
 			<td>Địa chỉ :</td>
			
			<td><input type="text"  name="txtdiachi" id="txtdiachi"/></td>
			<Td>
            	<div id="divDiachi	Error"></div>
            </Td>
	</tr>
	<tr>
		 <td>Giới tính :</td>
			<td><input type="radio" name="sex" id="sex" checked /> Nữ
			<input type="radio" name="sex" id="sex"/> Nam</td>
	</tr>
</table>
  	<input type="submit" onclick="return validateForm()" value="Save" />	
</div>
</fieldset>
</body>
</html>