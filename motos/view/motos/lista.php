<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Listado de motos</title>
	</head>
	<body>
		<h1>Listado de motos</h1>
		<table border="1">
			<tr>
				<th>Matrícula</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Color</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		<?php 
			foreach($motos as $moto){
				echo "<tr>";
				echo "<td>$moto->matricula</td>";
				echo "<td>$moto->marca</td>";
				echo "<td>$moto->modelo</td>";
				echo "<td style='background-color: $moto->color;'>$moto->color</td>";
				echo "<td><a href='index.php?operacion=ver&parametro=$moto->id'>Ver</a></td>";
				echo "<td><a href='index.php?operacion=modificar&parametro=$moto->id'>Modificar</a></td>";
				echo "<td><a href='index.php?operacion=borrar&parametro=$moto->id'>Borrar</a></td>";
				echo "</tr>";
			}
		?>
		</table>

		<a href="index.php">Inicio</a>
	</body>
</html>