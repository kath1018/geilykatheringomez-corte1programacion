<?php
$num = rand(1900,2100);
echo $num;
if($num%4==0 && $num%100==0){
echo"es bisiesto";
  } else {
	echo "no es bisiesto";
}