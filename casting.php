<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php 
/*
$num=rand();
*/

/*Número random, Se puede hacer sin parámetros*/
$num=rand(10,50);

echo "El numero random es " . $num;

echo "<br>";
echo "===============================";
echo "<br>";


/*elevar números, 5 elevado al cubo*/
$num2 = pow(5,3);
echo "El numero elevado es " .$num2 ;

echo "<br>";
echo "===============================";
echo "<br>";

/*redondear el num, la siguiente variable después del $num3, son los decimales a lo que quiero redondear, puede ir sin nada.*/
$num3 = 6.548756;
echo "El número redondeado es ". round($num3,2) ;

echo "<br>";
echo "===============================";
echo "<br>";


/*Casing implícito*/
$num4="5";
$num4 += 2;

echo "El número es " . $num4;


echo "<br>";
echo "===============================";
echo "<br>";


/*Casting explícito*/
$num5="6";
$res = (int)$num5;
echo "El casting explícito es ". $res;



 ?>




	
</body>
</html>