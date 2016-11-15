<?php
	//si no me llega el parámetro (error)
	if(empty($_GET['parametro']))
		throw new Exception('No se indicó el hotel a modificar');
	
	//recuperar el hotel
	require_once 'model/hotelespeninsulares.php';

	$id = $_GET['parametro'];
	$hotel = hotel::getHotel($id);

	//si no existe el hotel (error)
	if(empty($hoteles))
		throw new Exception('No se encontró el hotel a modificar');


	//si no llegan los datos del formulario
	if(empty($_POST['modificar'])){
		//poner el formulario
		include 'view/hotel/modificar.php';
	
	}else{
		//si llegan los datos del formulario, se sustituyen los datos de 
		//la moto con los que llegan desde el formulario
		$hoteles->nombre = $_POST['nombre'];
		$hoteles->compañia = $_POST['compañia'];
		$hoteles->habitaciones = $_POST['habitaciones'];
		$hoteles->plazas = $_POST['plazas'];
		$hoteles->ciudad = $_POST['ciudad'];
		
		
		if(!$hoteles->modificar())
			throw new Exception('No se pudo modificar el hotel');
		
		//cargar la vista de éxito
		$mensaje = "El hotel $hoteles->nombre $hoteles->compañia $hoteles->habitaciones .";
		include 'view/exito.php';
		
		//OPCIONAL: no cargar la vista de éxito sino ir al listado
		//include 'controller/listar.php';
	}
?>