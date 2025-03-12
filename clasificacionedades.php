<html>
<head>
 <title>Problema</title>
</head>
<body>
 <?php
 $num = rand(1, 100);
 echo $num;
 echo "<br>";
 if ($num <=10) {
 echo "es un niño.";
 } else {
if ($num>=10) 
	if ($num<17) 
echo "el es un adolecente";
if ($num>=17) 
	if ($num<30) 
echo "el es un joven";

if ($num>=30) 
	if ($num<55) 
echo "el es un adulto";

if ($num>=55) 
	if ($num<100) 
echo "el es un adulto mayor";
}

 ?>
</body>
</html>