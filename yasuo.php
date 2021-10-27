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
</head>
<center>
<body>
<?php
	  include("open.php");
	  $sosp1trang=12;
	  if(isset($_GET["trang"])){
	  $trang=$_GET["trang"];
	  settype($trang,"int");
	  }else
	  {
		  $trang=1;
	  }
 ?>
	 <table style="padding-left:20px ;padding-top:15px" width="100%">
      <tr>
      <?php
	  $from=($trang-1)*$sosp1trang;
	  $query = "select * from tblsanpham where ma_nsx = 4 limit $from, $sosp1trang";
	
	  $resultSp = mysqli_query($conn,$query);
	  $dem=0;
		while($row=mysqli_fetch_array($resultSp))
		{
			$dem++
	  ?>
<td>
      <center><table height="140px" width="250px">
            
        <div class="container">
              <a href="?tem=10&ma=<?php echo($row["ma"]);?>"><img src="<?php echo "anh/".$row["anh"];?>"  class="image" /></a>
              <a href="?tem=10&ma=<?php echo($row["ma"]);?>"><div class="overlay">
    <div class="text"><?php echo($row["mota"]);?></div>
  </div></a>
</div>
            <tr align="center">
              <td><?php echo($row["ten"]); ?></td>
            </tr>
            <tr align="center">
              <td>Giá :&nbsp;<font color="#224BCC"><?php echo number_format($row["gia"])."VNĐ";?></font><a href="giohang_xuly.php?ma=<?php echo $rowsp["ma"]; ?>"><img src="anh/carrt1.png" width="45px" height="40px"></a></td>
            </tr>
        </table></center>
     </td>
        <?php
		if($dem%3==0)
		{
			?>
            </tr>
            <tr>
            <?php
			}
		}
		?> 
            </tr>
        </table>
         <?php
		$query = "select * from tblsanpham";
		 $result1=mysqli_query($conn,$query);
		 $demrow=mysqli_num_rows($result1);
		 $sotrang=ceil($demrow / $sosp1trang);
		 for($t=1;$t<=$sotrang;$t++)
		 {
			 echo "<a href='main.php?tem=16&trang=$t' style='color:blue; text-decoration:none'>$t&nbsp;&nbsp;</a>";
			 }
	?>

 </body>
</center>
</html>