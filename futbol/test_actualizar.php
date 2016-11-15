<?php
	require_once 'config.php';
	require_once 'Database.php';
	require_once 'Equipo.php';
	
	//recupera el equipo 5
	$equipo = Equipo::recuperar(4);
	
	$equipo->nombre = 'Atco Madrid B';
	$equipo->categoria = 'Segunda B';
	
	$equipo->actualizar();
		
?>