<?php
	require_once 'config.php';
	require_once 'Database.php';
	require_once 'Equipo.php';
	
	//borra el equipo 4
	echo Equipo::borrar(4)? 'BORRADO OK' : 'NO SE PUDO BORRAR';
?>