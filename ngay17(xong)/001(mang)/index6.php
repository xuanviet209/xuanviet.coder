<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
    $a = [9,1,4,2,5,2,100,20,30,11,15,12,120];

    ?>
    <pre>
        1 - Cho mảng trên hãy tìm ra giá trị nhỏ nhất trong mảng
        2 - Cho mảng trên hãy tìm ra giá trị lớn nhất trong mảng
    </pre>
    
    <?php
    $max = 0;
    $b=count($a);
    for ($i = 0; $i < $b; $i++)
    {
        if ($max == 0){
            $max = $a[$i];
        }
        else {
            if ($a[$i] > $max){
                $max = $a[$i];
            }
        }
    }
     echo "Max=".$max;
    ?>

    <?php
    $min=0;
    $b=count($a);
    for($i=0;$i<$b;$i++)
    {
        if($min==0){
            $min=$a[$i];
        }
        else {if($a[$i]<$min){
            $min=$a[$i];
            }   
        }
    }
    echo "<br> Min =".$min;
    ?>
    
</body>
</html>