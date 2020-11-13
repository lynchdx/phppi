<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<form name="form1" method="post" action="">
	<p>
	<label for="num1"></label>
	<input autocomplete="off" type="text" name="num1" id="num1">
	<label for="num2"></label>
	<input autocomplete="off" type="text" name="num2" id="num2">
	<label for="operacion"></label>
	<select name="operacion" id="operacion">
		<option>Suma</option>
		<option>Resta</option>
		<option>Multiplicacion</option>
		<option>Division</option>
		<option>Módulo</option>
	</select>
	</p>
	<p>
		<input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
	</p>	
</form>

	

	<?php 

		if (isset($_POST["button"])) {
			
			$numero1=$_POST["num1"];
			$numero2=$_POST["num2"];
			$operacion=$_POST["operacion"];


			if (!strcmp("Suma",$operacion)) {
				echo "El resultado es: " . ($numero1+$numero2);
			}

			if (!strcmp("Resta",$operacion)) {
				echo "El resultado es: " . ($numero1-$numero2);
			}

			if (!strcmp("Multiplicacion",$operacion)) {
				echo "El resultado es: " . ($numero1*$numero2);
			}

			if (!strcmp("Division",$operacion)) {
				echo "El resultado es: " . ($numero1/$numero2);
			}

			if (!strcmp("Módulo",$operacion)) {
				echo "El resultado es: " . ($numero1%$numero2);
			}

		}





	 ?>


</body>
</html>