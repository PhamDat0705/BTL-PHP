<!doctype html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style/dangkiform.css">
<title>Đăng Kí</title>
<style>
.body {
  position: relative;
  width:100%;
  margin:auto
}
</style>
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
<div class="body">
<form action="dangki_xuly.php" method="post">
<div class="all" align="center" >
	<div class="form">
		<h1 id="a">Đăng kí thành viên</h1>
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
    		<input type="submit" id="submit" onclick="return validateForm()" value="Đăng ký" name="submit" />
			<input type="reset"  value="RESET" id="reset"/>
	</div>
</div>
</form>
</div>
</body>
</html>