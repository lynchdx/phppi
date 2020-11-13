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
		strcmp = string compare, toma en cuenta si hay dif entre mayusculas y minusculas

		strcasecmp = compara pero ignora las mayusculas y minusculas, solo q estén escritas igualmente.

		Los dos devuelven 1 = true, o, 0 = false;
	*/

	//ejemplo strcmp
	$variable1 ="casa";
	$variable2 ="CASA";	
 	
 	$resultado=strcmp($variable1,$variable2);

 	//devuelve 1 xq es true xq las mayusculas son diferentes.
 	echo "El resultado es ".$resultado;
 	echo "<br>";


 	/*==========================================================*/


 	$var1 ="casa";
	$var2 ="CASA"; 

	//devuelve false (0) ya que ignora las mayúsculas y minusculas
	$res=strcasecmp($var1,$var2);	
	echo "El resultado es ".$res;


	echo "<br>";

	if ($resultado){
		echo "Coinciden";
	}else{

		echo "no coinciden";
	}


	 ?>



</body>
</html>