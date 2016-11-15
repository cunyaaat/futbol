<?php
	require_once 'config.php';
	require_once 'Database.php';
	require_once 'Equipo.php';
	
	//EJEMPLO DE PETICION
	//test_recuperar_filtro.php?campo=nombre&filtro=celon
	
	//recuperar el filtro que viene en la petición
	$campo = empty($_GET['campo'])? 'nombre' : $_GET['campo'];
	$filtro = empty($_GET['filtro'])? '' : $_GET['filtro'];
	
	//recupera todos los equipos
	$equipos = equipo::recuperarfiltrado($campo, $filtro);
	
	//imprimir los equipos encontrados
	if(empty($equipos))
		echo 'No se encontraron resultados';
	else{
		echo '<ul>';
		
		foreach($equipos as $e)
			echo "<li>$e</li>";
		
		echo '</ul>';
	}
?>