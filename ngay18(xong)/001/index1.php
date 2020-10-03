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
        Xây dựng 1 hàm phục vụ yêu cầu như sau :
        1 tài khoản ngân hàng gửi có X số tiền với lãi xuất là Y %/1 năm
        Hãy xây dựng 1 function trả ra số tiền trong tài khoản của khách hàng
        sau Z ngày .
    </pre>
    <?php
    function taikhoan($sotien,$songay,$laisuat){
        $tienlai= ($sotien * ($laisuat/100)) /365 * ($songay);
        $sum= $tienlai+$sotien;
        return $sum;
    }

    if(isset($_POST) && count($_POST))
    {
        $sotien=$_POST["sotien"];
        $laisuat=$_POST["laisuat"];
        $songay=$_POST["songay"];

        $sum=0;
        $sum=taikhoan($sotien,$songay,$laisuat);
        echo "<br> Tổng số tiền trong tài khoản là =".$sum;

    }
    ?>
    <form name ="bank"method="POSt" action="">
        <div>
            <label>Số tiền</label>
            <input type="text" name="sotien" value="">
        </div>

        <div>
            <label>Lãi xuất</label>
            <input type="text" name="laisuat" value="">
        </div>

        <div>
            <label>Số ngày đã gửi</label>
            <input type="text" name="songay" value="">
        </div>

        <input type="submit" name="submit" value="Tính số tiền trong bank">
    </form>
</body>
</html>