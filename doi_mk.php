<script language="javascript">
    function kt() {
        var loi = true;
        var matkhau = document.getElementById("pass");
        var txtPass = document.getElementById("txtPass");
        if (document.getElementById("txtPass").value != document.getElementById("pass").value) {
            document.getElementById("errMKC").innerHTML = "<br/>Mật khẩu cũ không chính xác";
            txtPass.focus();
            return;
            loi = (loi && false);
        } else {
            document.getElementById("errMKC").innerHTML = "";
        }
        var pass = document.getElementById("txtMKM");
        var TC = /^[a-z A-Z_0-9-+]{4,20}$/;
        if (document.getElementById("txtMKM").value == "") {
            document.getElementById("errPass").innerHTML = "<br/>Mật khẩu không để trống ";
            txtMKM.focus();
            return;
            loi = (loi && false);
        } else if (!TC.test(txtMKM.value)) {
            document.getElementById("errPass").innerHTML = "<br/>Mật khẩu phải từ 4 đến 20 kí tự ";
            txtMKM.focus();
            return;
            loi = (loi && false);
        } else {
            document.getElementById("errPass").innerHTML = "";
            txtMKM.style.backgroundColor = "white";
        }
        var rePass = document.getElementById("rePass");
        if (document.getElementById("rePass").value != document.getElementById("txtMKM").value) {
            document.getElementById("errrePass").innerHTML = "<br/>Mật khẩu không chính xác";
            rePass.focus();
            return;
            loi = (loi && false);
        } else {
            document.getElementById("errrePass").innerHTML = "";
        }
        if (loi == true) {
            document.getElementById("Form").submit();
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
.jingle {
	padding-right: 180px;
    display: grid;
    grid-template-columns: repeat(12,1fr);
    grid-template-rows: minmax(100px,auto);
}
.a123 {
	
    border: 1px solid #80808000;
    grid-column: 6/9;
    grid-row: 3;
    height: 320px;
    width: 380px;
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
    display: block ;
	background: #FFFFFF;
    border-bottom: 2px solid #FFFFFF;
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
    padding: 5px;
	align-content: center;
	
    width: 70%;
}
input[type="password"] {
    display: block;
    border-bottom: 2px solid #00BCD4;
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
    padding: 5px;
	
    width: 90%;
}
input#jing {
    padding: 7px;
    width: 50%;
    border-radius: 10px;
    border: none;
    position: absolute;
    bottom: 15px;
    cursor: pointer;
    background: linear-gradient(to right, #fc00ff, #00dbde);
}
input#jing:hover{
 
    background: linear-gradient(to right, #fc466b, #3f5efb); 
}
</style>
</head>
<center>
    <body>	
    <form method="post" action="" id="Form">
	<div class="jingle">
	<div class="a123">
	<h1>Thay đổi mật khẩu</h1>
	<table>
	
  	<input type="hidden" value="<?php echo ($_SESSION["ma"]); ?>" /><br/>	
  	<tr>
		<td><center>Tài khoản:</center></td>
		<td><center><input type="text" value="<?php echo ($_SESSION["user"]); ?>" disabled="disabled"  /></center></td>
	</tr>
	
	<tr>
		<td colspan="2"><input type="password" placeholder="Mật khẩu cũ" id="txtPass" value="" name="mkc" /><span id="errMKC" style="color:#F00; font-size:small"></span></td>
	</tr>

	<input type="hidden" id	="pass" value="<?php echo ($_SESSION["pass"]); ?>" /><span id="errMK" style="color:#F00; font-size:small"></span>
	
	<tr>
		<td colspan="2"><input type="password" id="txtMKM" placeholder="Mật khẩu mới" value="" name="mkm"  /><span id="errPass" style="color:#F00; font-size:small"></span></td>
	</tr>
	<tr>
		<td colspan="2"><input type="password" placeholder="Nhập Lại mật khẩu" id="rePass" value=""  /><span id="errrePass" style="color:#F00; font-size:small"></span></td>
		</tr>

	<input type="button" id="jing" value="Update" onClick="kt()" style="border-color:#F00; background-color:#F00; color:#FFF" />
		</table>
</div>
		</div>
        <?php

        if (isset($_POST["mkm"])) {
            $matkhaumoi = $_POST["mkm"];
            include("open.php");
            $sql = "UPDATE `dang_ki` SET `pass` = '$matkhaumoi' where `Code`={$_SESSION['ma']}";
            mysqli_query($conn, $sql);
            ?>
            <script language="javascript">
                alert("Đổi mật khẩu thành công");
            </script>
        <?php
            include("close.php");
        }
        ?>
    </body>
</center>