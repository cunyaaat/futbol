<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Confirmar Borrado</title>
	</head>
	<body>
		<h1>Confirmar borrado de <?php echo $alimento->nombre;?></h1>
		
		<p>¿Estas seguro de que deseas borrar el alimento 
		<?php echo $alimento->proteina.' '.$alimento->energia;?>
		con fibra <?php echo $alimento->nombre;?></p>
		
		<form method="post">
			<input type="submit" name="confirmar" value="Confirmar" />
		</form>

		<a href="index.php">Inicio</a>
	</body>
</html>