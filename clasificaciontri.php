<?php
$num1 =rand(1,10);
$num2 =rand(1,10);
$num3 =rand(1,10);
$a = $num1;
$b = $num2;
$c = $num3;
echo "$a $b $c" ;
echo"<br>";
if ($a==$b && $b==$c){
   echo "Equil�tero: Todos los lados iguales.";
} else {
if ($a==$c && $b!=$a){
   echo"Equil�tero: Todos los lados iguales.";
} else {
if ($a==$b && $b!=$c){
   echo"Is�sceles: Dos lados iguales.";
} else {
if ($a!=$b && $b==$c){
   echo"Is�sceles: Dos lados iguales.";
} else {
if ($a==$c && $b!=$c){
   echo"Is�sceles: Dos lados iguales.";
} else {
if ($a!=$b && $b!=$c){
   echo"Escaleno: Todos los lados diferentes.";
} else {
if ($a!=$c && $b!=$a){
   echo"Escaleno: Todos los lados diferentes.";
}
}
}
}
}
}
}
