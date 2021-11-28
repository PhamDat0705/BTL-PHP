<?php
$check = false;
if (!isset($_SESSION["user"])){
	$check = true;
}
if($check)
	header("Location:?tem=17");
else
mysqli_set_charset($conn,'UTF8');
$makh = $_SESSION["ma"];
$ten = "";
$sql = "select * from dang_ki where Code=$makh";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$ten = $row["ten"];
$sdt = $row["sdt"];
$diachi = $row["diachi"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">
 function validate()
 {
	 var loi=true;
	  var ten=document.getElementById("Hoten");
		if(ten.value=="")
		{
			document.getElementById("errHoTen").innerHTML="<br/>Tên không được để trống"
			Hoten.focus();
			return;
			loi=(loi&&false);
			}
			else
			{
				document.getElementById("errHoTen").innerHTML="";
				ten.style.backgroundColor="white";
				}
	 var dc=document.getElementById("dc");
		if(dc.value=="")
		{
			document.getElementById("errDC").innerHTML="<br/>Địa chỉ không được để trống"
			dc.focus();
			return;
			loi=(loi&&false);
			}
			else
			{
				document.getElementById("errDC").innerHTML="";
				dc.style.backgroundColor="white";
				}
	var sdt=document.getElementById("sdt");
	    var TC=/^0+[1-9-+][0-9-+]{8,9}$/;
	    if(document.getElementById("sdt").value=="")
	    {
			document.getElementById("errSDT").innerHTML="<br/>SDT không để trống ";
			sdt.focus();
			return;
			loi=(loi&&false);
		}else if(isNaN(document.getElementById("sdt").value) == true)
		{
			document.getElementById("errSDT").innerHTML="<br/>SDT phải là số! ";
			sdt.focus();
			return;
			loi=(loi&&false);
		}else if(!TC.test(sdt.value))
		{
			document.getElementById("errSDT").innerHTML="<br/>SDT ko đúng định dạng! ";
			sdt.focus();
			return;
			loi=(loi&&false);
		}
		
		else
		{
			document.getElementById("errSDT").innerHTML="";
			sdt.style.backgroundColor="white";
		}
	
   if(loi==true)
	    {
	document.getElementById("form").submit();
	    }
	 }
	 </script>
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
.form {
	padding-top: 20px;
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
	padding-top: 20px;
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
textarea {
    display: block;
    border-bottom: 2px solid #00BCD4;
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
    padding: 5px;
    width: 80%;
}
input[type="datetime"] {
    display: block;
    border-bottom: 2px solid #00BCD4;
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
    padding: 5px;
    width: 80%;
}
input#abc {
    padding: 7px;
    width: 50%;
    border-radius: 10px;
    border: none;
    position: absolute;
    bottom:45px;
    cursor: pointer;
    background: linear-gradient(to right, #fc00ff, #00dbde);
}
input#abc:hover{
 
    background: linear-gradient(to right, #fc466b, #3f5efb); 
}
</style>
</head>
<center>
<body>
        
 <form action="?tem=8" method="post" id="form">
	<div class="all" align="center" >
	<div class="form">
		<h1 id="a">Thông tin người nhận</h1>
 <table style="padding-top: 30px;">
      <tr>
         <td>Tên người nhận</td>
         <td><input type="text" name="txtHoTen" id="Hoten" value="<?php echo $ten;?>" onclick="this.value=''" /><span id="errHoTen" style="color:#F00; font-size:small"></span></td>
      </tr>
       <tr>
         <td>Địa chỉ nhận</td>
         <td><textarea name="txtDC" id="dc" onclick="this.value=''"><?php echo $diachi;?></textarea><span id="errDC" style="color:#F00; font-size:small"></span></td>
      </tr>
       <tr>
         <td>Số điện thoại</td>
         <td><input type="text" name="txtSDT" id="sdt" value="<?php echo $sdt;?>" onclick="this.value=''" /><span id="errSDT" style="color:#F00; font-size:small"></span></td>
      </tr>
       <tr>
         <td>Ngày đặt</td>
         <td><input type="datetime" name="txtNgay" value="<?php echo date("Y/m/d");?>"/></td>	
      </tr>
      <tr>
        <td></td>
        <td><input type="button" id="abc" value="Xác nhận" onclick="validate()" style="border-color:#FFFFFF; background-color:#; color:#000000; width:170px; height:30px" /></td>
      </tr>
    </table>
 </form>
</body>
</center>
</html>