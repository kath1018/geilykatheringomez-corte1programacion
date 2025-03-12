<?php

$vocales = "aeiou";
$letra = $vocales[rand(0, strlen($vocales) - 1)];

echo "Letra generada: $letra <br>";
if ($letra == 'a') {
    echo "Es la vocal A.";
} else {
if ($letra == 'e') {
    echo "Es la vocal E.";
} else {
if ($letra == 'i') {
    echo "Es la vocal I.";
} else {
if ($letra == 'o') {
    echo "Es la vocal O.";
} else {
if ($letra == 'u') {
    echo "Es la vocal U.";
}
}
}
}
}
