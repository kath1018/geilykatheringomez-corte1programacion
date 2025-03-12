<?php
$r1 = "Piedra";
$r2 = "Papel";
$r3 = "Tijera";
$num = rand(1,3);
echo"$num";
echo"<br>";
if ($num == 1) {
	echo "$r1";
} else {
if ($num == 2) {
    echo "$r2";
} else {
if ($num == 3) {
    echo "$r3";
}
}
}