<?php
  $a = 5;
  $b = 4;
  $c = 3;
  echo "<br> cạnh a của tam giác = ". $a;
  echo "<br> cạnh b của tam giác = ". $b;
  echo "<br> cạnh c của tam giác = ". $c;

  if(($a+$b)>$c && ($c+$b)>$a && ($c+$a)>$b){
  	echo "<br> Đây là 3 cạnh của tam giác";
  }else{
  	echo "không phải là tam giác";
  }

?>