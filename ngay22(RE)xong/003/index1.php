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

    <pre>
        viết regex để validate tên hợp lệ
    </pre>
    <?php
    $subject1 = "nguyễn tuấn anh";
    $subject2 = "anh";
    $pattern =  "/([^\d]*)\s([^\d]*)/i";

    $result=preg_match($pattern, $subject1);
    echo $result;

    // $check = ...


    ?>

</body>
</html>