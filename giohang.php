<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
<style>
.container {
  position: relative;
  width:50%;
  margin:auto
}

.image {
  display: block;
  width:200px;
  height: 200px;
  margin-left:-20px;
 
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 200px;
  width: 170px;
  opacity: 0;
  transition: .5s ease;
  background-color:#FFF;
 
}

.container:hover .overlay {
  opacity: 1;
  margin-left:-20px;
  
}

.text {
  color: black;
  font-size:16px;
  position: absolute;
  top: 5%;
  left: 5%;
  transform: translate(-0.5%, -0.5%);
  -ms-transform: translate(-0.5%, -0.5%);
}
</style>
<SCRIPT LANGUAGE="JavaScript">
        function confirmAction() {
            return confirm("Bạn có chắc chắn xóa sản phẩm này khỏi giỏ hàng không?")
        }
</SCRIPT>
</head>
<center>
<body>
<?php
if(isset($_SESSION["giohang"]))
	{
		
		include("open.php");
		$sql="select * from tblsanpham";
		$result=mysqli_query($conn,$sql);
?>
<form method="post" action="capnhat_giohang.php">
<center><font size="+6">Giỏ hàng</font>
<img src="anh/logocart.jpg"	height="100px" width="100px">
</center>
<table border="1" cellspacing="0px" width="100%">
	<tr bgcolor="#B96566" height="70px">
    	<td><font size="+2">Mã sản phẩm</font></td>
		<td><center><font size="+2">Ảnh</font></center></td>
        <td><font size="+2">Tên sản phẩm</font></td>
        <td><font size="+2">Số lượng</font></td>
        <td><font size="+2">Đơn giá</font></td>
		<td><font size="+2">Xóa</font></td>
        <td><font size="+2">Thành tiền</font></td>
    </tr>
    <?php 
	$tongtien = 0;
	while ($rowsp = mysqli_fetch_array($result)) {
           $dongia = 0;
           $code = $rowsp["ma"];
           if (isset($_SESSION["giohang"][$code])) {
	?>
    <tr>
    	<td><center><?php echo ($rowsp["ma"]) ?></center></td>
        <td><img src="<?php echo "anh/".$rowsp["anh"];?>" style="width:100px;height:100px"/></td>
		<td><?php echo $rowsp["ten"]; ?></td>
        <td><input type="number" name="arrsl[]" min="1" max="10" value="<?php echo ($_SESSION["giohang"][$code]); ?>" />
			<input type="submit" value="Xác Nhận" style="background-color:#9B8B8B; color:#00000; width:80px; height:20px" />
        </td>
        <td><?php echo number_format($rowsp["gia"]) ."VND"; ?></td>
		<td><a href="xoasp.php?ma=<?php echo ($rowsp["ma"]); ?>" onclick="return confirmAction()"><img src="anh/logoxoa.png" height="25px" /></a></td>
        <td><?php
            $dongia = ($_SESSION["giohang"][$rowsp["ma"]] * $rowsp["gia"]);
            echo number_format($dongia) . " VND</p>"; ?></td>
    </tr>
    <?php }
                    $tongtien = $tongtien + $dongia;
                    $_SESSION["tongtien"] = $tongtien;
                }
                ?>
    <tr height="50px">
    	<td colspan="5"><center><font size="+2" color="#D92528"><p>Tổng thanh toán</p></font></center></td>
        
        <td colspan="2"><center><?php echo number_format ($tongtien) . " VND</p>"; ?></center></td>
    </tr>
	</form>
</table>
<br />
<a href="?tem=9">Đặt hàng</a>
 <?php
		  } else
	{
		echo("Bạn chưa có sản phẩm nào trong giỏ hàng!");	
	}
	?>
</body>
</center>
</html>

