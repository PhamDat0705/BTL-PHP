<script language="javascript">
		alert("Đặt hàng thành công");
		</script>
<?php
if(isset($_POST["txtHoTen"])&&isset($_POST["txtDC"])&&isset($_POST["txtSDT"])&&isset($_POST["txtNgay"]))
{
	include("open.php");
	$makh=$_SESSION["ma"];
	$ten=$_POST["txtHoTen"];
	$dc=$_POST["txtDC"];
	$sdt=$_POST["txtSDT"];
	$ngay=$_POST["txtNgay"];
	if(isset($_SESSION["giohang"]))
	{
		include("open.php");
		$sql="select * from tblsanpham";
		$result=mysqli_query($conn,$sql);
		?>     
        <center>
        <h2> Giỏ hàng của bạn</h2>
        <table border="1px" cellspacing="0" width="80%" height="260" bordercolor="#FFFFFF">
        	<tr style="background:linear-gradient(to right, #fc466b, #3f5efb); color:#FFF">
            	<th height="94">Mã</th>
                <th>Ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th colspan="5">Đơn giá</th>
               
         <?php
	 $tongtien=0;
		while($row=mysqli_fetch_array($result))
		{
			$dongia=0;
			$ma=$row["ma"];
			if(isset($_SESSION["giohang"][$ma]))
			{
				?>
                <tr style="background-color:#ffffff">
                	<td><?php echo($row["ma"]);?></td>
        			<td><img src="<?php echo "anh/".$row["anh"];?>" style="width:100px;height:100px"/></td>
                    <td><?php echo($row["ten"]);?></td>
                    <td><?php echo($row["gia"]);?></td>
                    <td><?php echo($_SESSION["giohang"][$ma]);?></td>
                    <th><?php $dongia=($_SESSION['giohang'][$row['ma']]*$row['gia']);
                     echo number_format($dongia) ." VNĐ</p>";?></th>
               </tr>
                
          <?php	
			}
			$tongtien=$tongtien+$dongia;	
		}
	}
		?>    
        </table>
          </center>
            <table style="float:right" width="900px">
              <tr>
                <td width="408"><td width="0">
                 </td><td width="339"></td>
                 <td width="133"> TỔNG TIỀN:<?php echo number_format($tongtien)."VNĐ</p>";?>
                </td>
              </tr>
            </table>
        

   <center> <h2>Thông Tin Người Nhận</h2>
    <table width="70%" align="center" border="1" cellspacing="0" bordercolor="#FFFFFF">
    	<tr style="background:linear-gradient(to right, #fc466b, #3f5efb); color:#FFF">
        	<th style="line-height:40px">Người nhận</th>
        	<th style="line-height:40px">Đia chỉ</th>
            <th style="line-height:40px">SĐT</th>
            <th style="line-height:40px">Ngày đặt</th>
           
        </tr>
        <tr align="center" style="background-color:#F3F3F3">
            <td style="line-height:30px"><?php echo($ten);?></td>
        	<td style="line-height:30px"><?php echo($dc);?></td>
            <td style="line-height:30px"><?php echo($sdt);?></td>
            <td style="line-height:30px"><?php echo($ngay);?></td>  
        </tr>
    </table>
    </center>
<?php 
	mysqli_set_charset($conn,'UTF8');
	$sqlHoaDon="insert into hoa_don (ma_hoa_don, ma_khach_hang,ten_nguoi_nhan,sdt_nguoi_nhan, dia_chi_nguoi_nhan,thoi_gian,tong_tien) VALUES (NULL, '$makh', '$ten','$sdt', '$dc', '$ngay','$tongtien')";
	mysqli_query($conn,$sqlHoaDon);
	$ma_hoa_don=mysqli_insert_id($conn);
	$giohang=$_SESSION["giohang"];
	foreach($giohang as $code=>$sl)
	{
		
		$sqlHDCT="insert into hoa_don_chi_tiet (ma_san_pham,so_luong,ma_hoa_don) VALUES ('$code','$sl','$ma_hoa_don')";
		mysqli_query($conn,$sqlHDCT);	
		
	}
?>
    <?php
	}
	unset($_SESSION["giohang"]);
include("close.php");

	?>