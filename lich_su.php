<?php
$check = false;
if (!isset($_SESSION["user"])){
	$check = true;
}
if($check)
	header("Location:?tem=17");
else
include("open.php");
$display=5;
$makh=$_SESSION["ma"];
		if(isset($_GET["page"]) && (int)$_GET["page"])
		{
			$page=$_GET["page"];
			}
			else{
				  $sql="SELECT COUNT(*) FROM `hoa_don_chi_tiet`INNER JOIN hoa_don on hoa_don_chi_tiet.ma_hoa_don=hoa_don.ma_hoa_don 
				  INNER JOIN tblsanpham ON hoa_don_chi_tiet.ma_san_pham=tblsanpham.ma where hoa_don.ma_khach_hang=$makh";
				  $result=mysqli_query($conn,$sql);
				  $row=mysqli_fetch_array($result);
				  $record=$row[0];
				  if($record > $display)
				  {
					  $page= ceil($record/$display);
					  }
					  else{
						   $page=1;
						  }
				}
				$start=(isset($_GET["start"]) && (int)$_GET["start"]) ? $_GET["start"]:0;
if(isset($_SESSION["ma"]))
{
	$makhachhang=$_SESSION["ma"];
	$sql="SELECT tblsanpham.ten,tblsanpham.anh, tblsanpham.gia,hoa_don_chi_tiet.ma_hoa_don_ct,hoa_don_chi_tiet.ma_hoa_don,hoa_don_chi_tiet.so_luong,
	 hoa_don.thoi_gian
	 FROM `hoa_don_chi_tiet`INNER JOIN hoa_don on hoa_don_chi_tiet.ma_hoa_don=hoa_don.ma_hoa_don 
	 INNER JOIN tblsanpham ON hoa_don_chi_tiet.ma_san_pham=tblsanpham.ma where hoa_don.ma_khach_hang=$makh limit $start,$display";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)

{

?>
<br /><br />
<center>
<h2>LỊCH SỬ MUA HÀNG CỦA BẠN</h2>
<table border="1px" cellspacing="0" width="80%" height="260" bordercolor="#787777">
        <tr style="background:linear-gradient(to right, #fc466b, #3f5efb); color:#FFF">           
           <td width="62" height="30"><center>Mã</center></td>
           <td width="268"><center>Tên sản phẩm</center></td>
           <td width="191"><center>Ảnh</center></td>
           <td width="120"><center>Số lượng</center></td>
           <td width="152"><center>Giá</center></td>
           <td width="138"><center>Tổng tiền</center></td>
           <td width="148"><center>Ngày đặt</center></td>
       
         </tr>
     <?php
	
	    while($row=mysqli_fetch_array($result))
		{
			?>
			
            <tr align="center" >
             <td><?php echo($row["ma_hoa_don"]);?></td>
             <td><?php echo($row["ten"]); ?></td>
             <td><img src="<?php echo"anh/".$row["anh"]; ?>" height="100px" /></td>
             <td><?php echo($row["so_luong"]); ?></td>
             <td><?php echo number_format($row["gia"])."VNĐ"; ?></td>
             <td><?php $dongia=$row["so_luong"]*$row["gia"]; echo number_format($dongia)."VNĐ"; ?></td>
             <td><?php echo($row["thoi_gian"]);?></td>
            </tr>
            <?php
		}	
	 ?>
	</table>
     <?php
	   if($page>1)
	   {
		   $next=$start+$display;
		   $prev=$start-$display;
		   $current=($start/$display)+1;
		   if($current!=1){
		   echo "<a href='main.php?tem=19&start=$prev'>Trước</a>";
		   }
		   for($i=1;$i<=$page;$i++)
		   {
			   
			   echo"<a href='main.php?tem=19&start=".($display*($i-1))."'>$i&nbsp;&nbsp;</a>";
			   }
		   if($current!=$page)
		   {
			   echo "<a href='main.php?tem=19&start=$next'>Tiếp</a>"; 
			   }
	 }

	   ?>	   
</center>


<?php
}



}

?>