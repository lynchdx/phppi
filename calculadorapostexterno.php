<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<form name="form1" method="post" action="procesocalculadora.php">
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

</body>
</html>