<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<?php 



		//variable státicas
		/*Existe solo a nivel local, pero no se pierde su valor cuando la ejecución del programa abandona este ámbito*/
		function incrementarVariable(){


			/*se usa statick, para que el valor de la variable quede almacenada en la ram, y se sigua usando así desde ese valor.*/
			static $contador = 0;

			$contador++;

			echo $contador . "<br>";


		}


		incrementarVariable();
		incrementarVariable();
		incrementarVariable();
		incrementarVariable();


	 ?>



</body>
</html>