<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viết PHP script để hiển thị tổng dãy số nguyên từ 1 đến 200.</title>
</head>
<body>
    <?php
        $sum = 0;
        for($i=1; $i<=200; $i++)
        {
            $sum = $sum + $i; 
        }
        echo"Tong = $sum";
    ?>
</body>
</html>