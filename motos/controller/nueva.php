<?php

	//si no llegan los datos del formulario
	if(empty($_POST['guardar'])){
		//poner el formulario
		include 'view/motos/nueva.php';
	
	}else{
	//si llegan los datos del formulario
		//guardar
		require_once 'model/Moto.php';
		
		$moto = new Moto();
		$moto->matricula = $_POST['matricula'];
		$moto->marca = $_POST['marca'];
		$moto->modelo = $_POST['modelo'];
		$moto->color = $_POST['color'];
		
		if(!$moto->guardar())
			throw new Exception('No se pudo guardar la moto');
		
		//cargar la vista de éxito
		$mensaje = "La moto $moto->matricula $moto->marca $moto->modelo se guardó correctamente.";
		include 'view/exito.php';
		
		//OPCIONAL: no cargar la vista de éxito sino ir al listado
		//include 'controller/listar.php';
	}
?>