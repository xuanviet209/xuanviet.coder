<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<pre>
        hàm unset() hủy 1 phần tử trong mảng dựa vào key
    </pre>
	<?php
	 $cities3 = [];

    // gán các phần tử vào mảng
    // gán key 1 cách chủ động
    $cities3[0] = "hà nội";
    $cities3[1] = "đà nẵng";
    $cities3[2] = "hồ chí minh";
    // hủy 1 phần tử mang theo key
    unset( $cities3[0]);

    echo " cities3 <pre>";
    print_r($cities3);
    echo "</pre>";

	?>

</body>
</html>