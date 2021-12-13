<!doctype html>
<html>
<head>
	
<meta charset="utf-8">
<title>Untitled Document</title>
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
<link rel="stylesheet" type="text/css" href="style/style_admin_login.css">
</head>
<body>
<form action="admin_login_xuly.php" method="post">
<div class="body">
	<div class="form">
	<h1>Admin Login</h1>
  	<input placeholder="Username" type="text" id="txtUID" name="txtUID"><br/>
	
  	<input placeholder="Password" type="password" id="txtPWD" name="txtPWD"><br/>
	<input type="submit" id="submit" onclick="validateForm()" name="submit" value="Login">
	</div>
</div>
</form>
</body>
</html>
		