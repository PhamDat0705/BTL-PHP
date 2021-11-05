<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <style>
        .container-search {
            position: relative;
            width: 50%;
            margin: auto
        }

        .image {
            display: block;
            width: 100px;
            height: 140px;
            margin-left: -20px;

        }
        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 170px;
            width: 180px;
            opacity: 0;
            transition: .5s ease;
            background-color: #FFF;

        }

        .container-search:hover .overlay {
            opacity: 1;
            margin-left: -20px;

        }
        .textmt {
            color: black;
            font-size: small;
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
        if (isset($_POST["search"])) {
            $search = $_POST["txtSearch"];
            $sql = "select * from tblsanpham where ten like '%$search%' ";
            $result = mysqli_query($conn, $sql);
        }
        ?>
        <p>Sản phẩm tìm được!</p>
        <?php
		if($count =  mysqli_num_rows($result) == 0) 
		{ ?>
            <p>Không tìm thấy sản phẩm nào</p>
					
        <?php
        } 
		else {
            ?>
<table style="padding-top: 0px; width: 80%">
                <tr>
                    <?php
                        $dem = 0;
                        while ($rowsearch = mysqli_fetch_array($result)) {
                            $dem++;
                            ?>
                        <td>
                            <table height="150px" width="250px" align="center">
                                <div class="container-search">
									<fieldset>
                                    <a href="?tem=1&ma=<?php echo ($rowsearch["ma"]); ?>">
                                        <img src="<?php echo "anh/".$rowsearch["anh"];?>" style="width:200px; height:200px" class="image" /></a>
                                    <a href="?tem=1&ma=<?php echo ($rowsearch["ma"]); ?>">
                                        <div class="overlay">
                                            <div class="textmt"><?php echo ($rowsearch["mota"]); ?></div>
                                        </div>
                                    </a>
                                </div>
                                <tr align="center">
                                    <td><?php echo ($rowsearch["ten"]); ?></td>
                                </tr>
                                <tr align="center">
                                   <td>Giá :<?php echo number_format($rowsearch["gia"])."VNĐ";?><a href="giohang_xuly.php?ma=<?php echo ($rowsearch["ma"]);?>"><img src="anh/carrt1.png" width="45px" height="40px"/></a></td>
                                </tr>
								</fieldset>
                            </table>
                        </td>
                        <?php
                                if ($dem % 3 == 0) {
                                    ?>
                </tr>
                <tr>
        <?php
                }
            }
        }
        ?>
                </tr>
            </table>
    </body>
</center>

</html>