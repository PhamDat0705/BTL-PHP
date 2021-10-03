<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viết PHP script để hiển thị 1-2-3-4-5-6-7-8-9-…-100 trên một dòng thông qua vòng lặp for, while</title>
</head>
<body>
    <?php
        for($i=1; $i<=100; $i++)
        { 
            {  
              echo "$i-";  
            }
        }   
    ?>
</body>
</html>