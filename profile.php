<?php 
if (!isset($_SESSION["user"])){
	header("Location:main.php?tem=17");
}
else
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
<style type="text/css">
*{
    margin:0;
    padding:0;
    border:none;
    font-family: 'Open Sans', sans-serif;
}
.all {
    display: grid;
	padding-right: 230px;
    grid-template-columns: repeat(12,1fr);
    grid-template-rows: minmax(100px,auto);
}
.for {
    border: 1px solid #80808000;
    grid-column: 6/9;
    grid-row: 3;
    height: 400px;
    width: 350px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    border-radius: 15px;
    box-shadow: 0px 0px 14px 0px grey;
    background-color: white;
}
.h1 {
    margin-top: 40px;
    margin-bottom: 30px;
}
input[type="text"] {
    display: block;
    border-bottom: 2px solid #00BCD4;
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
    padding: 5px;
    width: 80%;
}
input[type="password"] {
    display: block;
    border-bottom: 2px solid #00BCD4;
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
    padding: 5px;
    width: 80%;
}
input#aab {
	
	left: 80px;
    padding: 7px;
    width: 50%;
    border-radius: 10px;
    border: none;
    position: absolute;
    bottom:80px;
    cursor: pointer;
    background: linear-gradient(to right, #fc00ff, #00dbde);
}
input#aab:hover{
 
    background: linear-gradient(to right, #fc466b, #3f5efb); 
}
input#aac {
	left: 80px;
    padding: 7px;
    width: 50%;
    border-radius: 10px;
    border: none;
    position: absolute;
    bottom:40px;
    cursor: pointer;
    background: linear-gradient(to right, #fc00ff, #00dbde);
}
input#aac:hover{
 
    background: linear-gradient(to right, #fc466b, #3f5efb); 
}
</style>
</head>
<body>
<?php
include("open.php");
mysqli_set_charset($conn,'UTF8');
$query = "select * from dang_ki where Code ={$_SESSION['ma']}";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
 ?>
			<form method="POST" action="">
	<div class="all"  >
	<div class="for">
		<h1 id="a">Thông tin tài khoản</h1>
				<table style="width: 100%;" >
					<tr>
						<td >Tài khoản</td>
						<td colspan="2" border="0"><input type="text" value="<?php echo $row["user"]; ?>" readonly="readonly" name="Name" /></td>
					</tr>
					<tr>
						<td>Tên</td>
						<td colspan="2"><input type="text" value="<?php echo $row["ten"]; ?>" name="ten" /></td>
					</tr>
					<tr>
						<td>Địa chỉ</td>
						<td colspan="2"><input type="text" value="<?php echo $row["diachi"]; ?>" name="dc" /></td>
					</tr>
					<tr>
						<td>Số điện thoại</td>
						<td colspan="2"><input type="text" value="<?php echo $row["sdt"]; ?>" name="sdt" /></td>
					</tr>
					<tr>
						<td>Email</td>
						<td colspan="2"><input type="text" value="<?php echo $row["email"]; ?>" name="email" /></td>
					</tr>
					<tr>
						<td><center><input type="submit" id="aab" value="Cập nhật" onclick="validate()" name="btnUDU" /></center></td>
						<td><a href="?tem=20"><input type="button" id="aac" value="Đổi mật khẩu" name="CP" /></a></td>
					</tr>
					<td>
					</td>
				</table>
				</div>
		</div>
			</form>
<?php
if (isset($_POST["ten"])&& isset($_POST["dc"])&& isset($_POST["sdt"])&& isset($_POST["email"])) 
{
	$ma = $_SESSION["ma"];
    $ten = $_POST["ten"];
    $dc = $_POST["dc"];
	$sdt = $_POST["sdt"];
    $email = $_POST["email"];
    $sql = " update dang_ki set ten ='$ten',sdt	= '$sdt',email = '$email',diachi = '$dc' where Code = $ma";
    mysqli_query($conn,$sql);
	
}  	
?>
</center>
</body>
</html>