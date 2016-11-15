<?php
	//si no me llega el parámetro (error)
	if(empty($_GET['parametro']))
		throw new Exception('No se indicó la moto a mostrar');

	//recuperar la moto
	require_once 'model/Moto.php';
	
	$id = $_GET['parametro'];
	$moto = Moto::getMoto($id);	
	
	//si no existe la moto (error)
	if(empty($moto))
		throw new Exception('No se encontró la moto');
	
	//cargar la vista de detalles
	include 'view/motos/detalles.php';
?>