<?php
	require_once 'config.php';
	require_once 'Database.php';
	require_once 'Equipo.php';
	
	//ejemplo de petición:
	//test_recuperar_por_id.php?id=1
	
	//recupera el ID que llega por GET
	$id = empty($_GET['id'])? 0 : $_GET['id'];
	
	//busca el equipo con ese ID
	$equipo = Equipo::recuperar($id);
	
	//muesta el equipo (si lo encontró en la BDD)
	echo $equipo? $equipo : 'No se encuentra el equipo';
	
	
?>