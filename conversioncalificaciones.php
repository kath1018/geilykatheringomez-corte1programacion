<?php
$c1 = "Muy Deficiente";
$c2 = "Insuficiente";
$c3 = "Suficiente";
$c4 = "Notable";
$c5 = "Sobresaliente";
$num = rand(1,5);
echo"$num";
echo"<br>";
if ($num == 1) {
	echo "$c1 : $num ";
} else {
    if ($num == 2) {
    echo "$c2 : $num";
} else {
    if ($num == 3) {
    echo "$c3 : $num";
} else {
    if ($num == 4) {
        echo "$c4 : $num";
} else {
    if ($num == 5) {
        echo "$c5 : $num";
}
}
}
}
}