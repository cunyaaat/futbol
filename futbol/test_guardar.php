<?php
	require_once 'config.php';
	require_once 'Database.php';
	require_once 'Equipo.php';
	
	$equipo = new Equipo();
	$equipo->nombre = 'Atlético de Madrid';
	$equipo->estadio = 'Vicente Calderón';
	$equipo->categoria = 'Primera';
	$equipo->fecha_fundacion = '1989-01-01';

	echo $equipo;
	
	if(!$equipo->guardar())
		throw new Exception('No se pudo guardar');
	
	
?>