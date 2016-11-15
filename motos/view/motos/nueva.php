<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Nueva moto</title>
	</head>
	<body>
		<h1>Nueva moto</h1>
		
		<form method="post">
			<label>Matrícula</label>
			<input type="text" maxlength="7" name="matricula" /><br>
			
			<label>Marca</label>
			<input type="text" name="marca" /><br>
			
			<label>Modelo</label>
			<input type="text" name="modelo" /><br>
			
			<label>Color</label>
			<input type="color" name="color" /><br>
			
			<input type="submit" name="guardar" value="Guardar" />
		</form>

		<a href="index.php">Inicio</a>
	</body>
</html>