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
        biến trong php
        sử dụng dấu $ trước tên biến
        tên biến viết liền không dấu và không có ký tự đặc biệt như @,!...
        ví dụ :
        $a , $b
        khi đặt tên biến thì nên đặt tên biến theo ngữ cảnh
        hoặc giá trị biến đang chứa
        dấu . được dùng để nối chuỗi
    </pre>

    <?php

    $hoten = "nguyễn xuân việt";
    echo "<br>chào xv " . $hoten;

    // in biến trong chuỗi
    // chú ý nếu đặt tên biến trong nháy kép thì php sẽ tự hiệu đấy là biến
    echo "<div>chào1 $hoten</div>";

    // nếu đặt tên biến trong nháy đơn thì php nó sẽ hiểu đấy là văn bản
    echo '<div>chào $hoten</div>';
    ?>
    <pre>
        làm sao để in ra giá trị của biến trong dấu '' của lệnh echo
        => giải pháp sử dụng phép nối chuỗi
    </pre>

    <?php echo '<div>'.$hoten.'</div>'; ?>

</body>
</html>