<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>268-Cosmetics</title>

</head>
<body >
<form>
<?php 
include("open.php");
$queryLoai = "select * from tblloai";
$resultLoai = mysqli_query($conn,$queryLoai);
$queryNsx = "select * from nha_san_xuat";
$resultNsx = mysqli_query($conn,$queryNsx);
$query = "select * from tblsanpham";
if(isset($_GET["maloai"]))
	$query = $query." where maloai=".$_GET["maloai"];
else{
	if(isset($_GET["ma_nsx"]))
		$query = $query." where ma_nsx=".$_GET["ma_nsx"];
	}
$resultSp = mysqli_query($conn,$query);
?>
<div class="header">
<ul class="menu cf">
  <li><a href="">Giới Thiệu</a></li>
  <li><a href="#">Liên hệ</a></li>
  <li>
    <a href="">Tài khoản: <?php
		session_start();
                if (isset($_SESSION["user"]))
				{
                    echo ($_SESSION["user"]);
                }
				else{
					echo  " ";
				}
                ?></a>
    <ul class="submenu">
      <li><a href="?tem=19">Lịch sử mua hàng</a></li>
      <li><a href="?tem=3">Xem thông tin</a></li>
      <li><a href="logout.php"	>Đăng xuất</a></li>
    </ul>			
  </li>
</ul>
</div>
<div class="wrapper">
	<div class="left1" ><center><a href="main.php"><img src="anh/aff.png" width="80%" height="240px" style="padding-top:40px"/></a></center>
	</div>
<div class="right1" >
<img src="anh/header.jpg" style="width:100% ; height:140% ">
</div>
</div>
<div class="menu">
	<center>
	<table cellspacing="5">
		<tr>
			<td colspan="2"><a href="main.php"><input id="bt1" type="button" value="Trang chủ"></a></td>
			<td></td>
			<td><a href="?tem=21"><input type="button" id="bt1" value="Khuyến mãi"></a></td>
			<td><a href="?tem=7"><input type="button" id="bt1" value="Giỏ hàng"></a></td>
			<td><a href="?tem=18"><input type="button" id="bt1" value="Đăng kí"></a></td>
			<td><a href="?tem=17"><input type="button" id="bt1" value="Đăng nhập"></a></td>
			<td>
				<div id="search" ><form action="?tem=4" method="post">
			</form></div></td>
			<form action="?tem=4" method="post">
			<td><div class="box" align="right">
      			<input type="text" name="txtSearch" id="sear" placeholder="Tên sản phẩm...">
      			<i class="fas fa-search-location"><input type="submit" value="Tìm kiếm" name="search" style=" width: 70px; background:#B7AFB0;border: none;border-radius: 20px;padding: 10px; color: black"/></i>
    		</div></td>
		</form>
		</tr>
	</table>
	</center>
	</div>

</div>
<div class="content">
<div class="left2" style="padding-top: 0px" >
<div class="menubar" >
                
                	<ul>
						<li style="height: 40px ; background: #ED6A5A; padding-top: 10px"  ><center><h2>---MENU---</h2></center></li>
						<li id="son"><a href="?tem=10">Son</a></li>
						<li id="mascara"><a href="?tem=11">Mascara</a></li>
						<li id="kem"><a href="?tem=12">Kem Trang Điểm</a></li>
						<li style="height: 40px ; background: #ED6A5A; padding-top: 10px"  ><center><h2>---Thương hiệu---</h2></center></li>
						<li id="yeh"><a href="?tem=13">YEHWADAM</a></li>
						<li id="the_or"><a href="?tem=14">The Ordinary</a></li>
						<li id="elf"><a href="?tem=15">E.L.F</a></li>
						<li id="yasuo"><a href="?tem=16"><L></L>oreal</a></li>
					</ul>

	</div>
<div>
	<img src="anh/new_icon.png" height="150px" width="100%">
</div>
<?php
	include("open.php");
	$sql="select * from tblsanpham where tblsanpham.ma=7&&10";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
?>
<fieldset>
<div>
<table border="0px">

<tr>
  <td>
	<tr align="center"><td><a href="?tem=7&ma=<?php echo($row["ma"]);?>"><img src="<?php echo "anh/".$row["anh"];?>" style="width:100%;height:170px"/></a></td></tr>
	<tr align="center"><td><?php echo($row["ten"]);?></td></tr>
<tr align="center">
              <td>Giá :<?php echo number_format($row["gia"])."VNĐ";?><a href="giohang_xuly.php?ma=<?php echo ($row["ma"]);?>"><img src="anh/carrt1.png" width="45px" height="40px"/></a></td>
            </tr>
   </td>
</tr>

</table>
</div>
</fieldset>
</div>
<div class="right2" >
<div id="sanpham" style="align-content: center">
        <?php
        if (isset($_GET["tem"])) {
            $tem = $_GET["tem"];
            switch ($tem) {
                case 1:
                    include("chitietsp.php");
                    break;
                case 2:
                    include("trangchu.php");
                    break;
                case 3:
                    include("profile.php");
                    break;
                case 4:
                    include("search.php");
                    break;
                case 5:
                    include("gioithieu.php");
                    break;
                case 6:
                    include("khuyenmai.php");
                    break;
                case 7:
                    include("giohang.php");
                    break;
				case 8:
                    include("thongtinmuahang.php");
                    break;
                case 9:
                    include("dat_hang.php");
                    break;
                case 10:
                    include("son.php");
                    break;
                case 11:
                    include("mascara.php");
                    break;
                case 12:
                    include("kem.php");
                    break;
                case 13:
                    include("yeh.php");
                    break;
                case 14:
                    include("the_or.php");
                    break;
                case 15:
                    include("elf.php");
                    break;
                case 16:
                    include("yasuo.php");
                    break;
				case 17:
                    include("dangnhap.php");
                    break;
				case 18:
                    include("dangki.php");
                    break;
				case 19:
                    include("lich_su.php");
                    break;
				case 20:
                    include("doi_mk.php");
                    break;
				case 21:
                    include("test.php");
                    break;
            }
        } else {
            include("trangchu.php");
        }
        ?>
    </div></div>
<div class="adv">
	<?php include("slideshow.html")?>
</div>
</div>
<div class="footer">
Địa chỉ: ADbc
<a href="admin_login.php">admin</a>
</div>
	<?php 
	include("close.php");
	?>
</form>
</body>
</html>