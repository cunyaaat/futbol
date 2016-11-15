<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Detalles de la moto <?php echo $moto->matricula;?></title>
	</head>
	<body>
		<h1>Detalles de la moto <?php echo $moto->matricula;?></h1>
		<h2><?php echo $moto->marca.' '.$moto->modelo;?></h2>
		
		<p><b>Matrícula: </b><?php echo $moto->matricula;?></p>
		<p><b>Marca: </b><?php echo $moto->marca;?></p>
		<p><b>Modelo: </b><?php echo $moto->modelo;?></p>
		<p><b>Color: </b></p>
		<div style="height: 100px; width: 100px; background-color: <?php echo $moto->color;?>;"><?php echo $moto->color;?></div>

		<a href="index.php?operacion=listar">Volver al listado</a>
	</body>
</html>