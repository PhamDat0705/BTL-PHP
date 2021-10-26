<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
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
	var txtUID = document.getElementById("txtUID");
	if(txtUID.value=="")	
	{
		alert("Không được để trống tài khoản");
		txtUID.focus();
		return ;
	}
	var txtPWD = document.getElementById("txtPWD");
	if(txtPWD.value=="")
	{
		alert("Không được để trống mật khẩu");
		txtPWD.focus();
		return ;
	}
}

</script>
<link rel="stylesheet" type="text/css" href="style/login.css">
</head>
<center>
<body>
<div class="body">
<form action="dangnhap_xuly.php" method="post">
<div class="jingle">
	<div class="a123">
	<h1>Login</h1>
  	<input placeholder="Username" type="text" id="txtUID" name="txtUID"><br/>
	
  	<input placeholder="Password" type="password" id="txtPWD" name="txtPWD"><br/>
	<div align="left"><input type="checkbox" id="rmbpass" />Nhớ mật khẩu</div>
	<input type="submit" id="submit" onclick="validateForm()" name="submit" value="Login">
	<br/>
	<a href="?tem=18"><input type="button" id="dki"  name="dki" value="Đăng kí tài khoản"></a>
</div>

</div>
</form>
</body>
</center>
</html>


