<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	function BMI($chieucao,$cannang){
	  $BMI= $cannang/(($chieucao/100)*($chieucao/100));
	  return $BMI;
	}
	$chieucao="";
	$cannang="";
	if(isset($_POST))
	{

		$chieucao=$_POST["chieucao"];
		$cannang=$_POST["cannang"];

		$ketqua=0;
		$ketqua=BMI($chieucao,$cannang);
		echo "<br> kết quả =".$ketqua;
	}

	if($ketqua<16)
		echo "<br> gầy độ 3";
	elseif($ketqua>=16 && $ketqua<17)
		echo "<br>gầy độ 2";
	elseif($ketqua>=17 && $ketqua<18.5)
		echo "<br> gầy độ 1";
	elseif($ketqua>=18.5 && $ketqua <25)
		echo "<br> bình thường";
	elseif($ketqua>=25 && $ketqua <30)
		echo" <br>thừa cân";
	elseif($ketqua>=30 && $ketqua <35)
		echo" <br>béo phì độ 1";
	elseif($ketqua>=35 && $ketqua<40)
		echo" <br>béo phì độ 2";
	else
		echo" <br>béo phí độ 3";

	?>
    <form name="BMI" method="POST" action="">
	<div>
		<label>nhập chiều cao</label>
		<input type="text" name="chieucao" value="<?php echo "$chieucao" ?>">
	</div>
	<div>
		<label>nhập cân nặng</label>
		<input type="text" name="cannang" value="<?php echo "$cannang"?>">
	</div>

	<input type="submit" name="submit" value="Tính BMI">
</form>
</body>
</html>