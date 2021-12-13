<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style/style_page_admin.css">
</head>
<body>
<?php 
session_start();
?>
<div align="right"><button><a href="admin_logout.php" style="text-decoration:none; color: black" ><img src="anh/logout.png" width="25px" height="25px">Đăng xuất</a></button></div>
<font color="#F3762B"><h1>Welcome: <?php echo  $_SESSION["uid"];?> đến với trang quản trị</h1></font><br/>
	
<div class="menu">
	<ul>
    <li><a href="#">Quản lí sản phẩm</a>
		<ul class="sub-menu">
        <li><a href="admin/SP_list.php">Danh sách sản phẩm</a></li>
        <li><a href="admin/SP_them.php">Thêm sản phẩm</a></li>
      </ul>	
	</li>
    <li><a href="#">Quản lí khách hàng</a>
   		<ul class="sub-menu">
        	<li><a href="admin/KH_list.php">Danh sách khách hàng</a></li>
			<li><a href="admin/KH_them.php">Thêm khách hàng</a></li>
      	</ul>
    </li>
    <li><a href="#">Quản lí nhà sản xuất</a>
		<ul class="sub-menu">
			<li><a href="admin/NSX_list.php">Danh sách nhà sản xuất</a></li>
			<li><a href="admin/NSX_them.php">Thêm nhà sản xuất</a></li>
      	</ul>	
	</li>
	<li><a href="#">Quản lí đơn hàng</a>
		<ul class="sub-menu">
			<li><a href="admin/Order_list.php">Danh sách đơn hàng</a></li>

		</ul>
	</li>
	</ul>
</div>
</body>
</html>