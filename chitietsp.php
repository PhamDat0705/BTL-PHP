<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    if (isset($_GET["ma"])) {
        $ma = $_GET["ma"];
        include("open.php");
		mysqli_set_charset($conn,'UTF8');
        $sql = "select * from tblsanpham where ma=$ma";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        ?>
        <table style="padding-left:20px ;padding-top:15px" width="100%">
            <tr>
                <td rowspan="4">
                    <img src="<?php echo ("anh/".$row["anh"]); ?>" width="70%" height="auto" />
                </td>
                <td valign="top"><b>
                        <font size="+2"><?php echo ($row["ten"]); ?></font>
                    </b></td>
            </tr>
            <tr>

                <td><b>
                        Giá :<font  size="+2" face="Arial, Helvetica, sans-serif"><?php echo number_format($row["gia"]) . " VND</p>" ; ?></font>
                    </b></td>
            </tr>
            <tr>

                <td><?php echo ($row["mota"]); ?></td>
            </tr>
            <tr>

                <td><a href="giohang_xuly.php?ma=<?php echo ($row["ma"]); ?>" style="text-decoration:none; font-size: "+2"; font-family:Arial, Helvetica, sans-serif">Đặt Hàng<img src="anh/carrt1.png" height="55px"  width="55px"/></a></td>
            </tr>

        </table>
    <?php
        include("close.php");
    } else {
        ?>
        <meta http-equiv="refresh" content="0,main.php" />
    <?php
    }
    ?>
</body>

</html>