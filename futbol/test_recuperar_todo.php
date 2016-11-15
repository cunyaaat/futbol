<?php
	require_once 'config.php';
	require_once 'Database.php';
	require_once 'Equipo.php';
	
	//recupera todos los equipos
	$equipos = Equipo::recuperartodo();
	
	//imprimir los equipos encontrados
	echo '<ul>';
	
	foreach($equipos as $e)
		echo "<li>$e</li>";
	
	echo '</ul>';
?>