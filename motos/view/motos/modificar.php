<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Modificar alimentos <?php echo $alimento->nombre;?></title>
	</head>
	<body>
		<h1>Modificar el alimento <?php echo $alimento->energía;?></h1>
		<h2><?php echo $alimento->proteina.' '.$alimento->hidratocarbono;?></h2>
		<h3><?php echo $alimento->fibra.' '.$alimento->grasatotal;?></h3>
		<form method="post">
			<label>Energía</label>
			<input type="text" maxlength="7" name="energía"  
				value="<?php echo $alimento->energía;?>" /><br>
			
			<label></label>
			<input type="text" name="proteina"
				value="<?php echo $alimento->proteina;?>" /><br>
			
			<label>Hidratocarbono</label>
			<input type="text" name="hidratocarbono" 
				value="<?php echo $alimento->hidratocarbono;?>" /><br>
			
			<label>Fibra</label>
			<input type="fibra" name="fibra" 
				value="<?php echo $alimento->fibra;?>" /><br>
			
			<input type="submit" name="modificar" value="Guardar cambios" />
			<input type="reset" value="Reset"/>
		</form>

		<a href="index.php?operacion=listar">Volver al listado</a>
	</body>
</html>