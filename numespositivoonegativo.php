<?php
$num =rand(-50 ,50);
echo $num;
if ( $num <= -1) {
echo"numero es negativo"; 
} else {
	if ( $num >= 1) {
echo"numero es positivo";
	} else {
if ( $num == 0) {
echo"numero neutro";
}
}
}
