<?php
	//si no me llega el parámetro (error)
	if(empty($_GET['parametro']))
		throw new Exception('No se indicó la moto a borrar');
	
	//recuperar la moto desde la BDD
	include 'model/Moto.php';
	$id = $_GET['parametro'];
	$moto = Moto::getMoto($id);

	//si no se pudo recuperar la moto a borrar (error)
	if(empty($moto))
		throw new Exception('No existe la moto a borrar');
	
	//si no llegan los datos del formulario
	if(empty($_POST['confirmar'])){
		//poner el formulario
		include 'view/motos/confirmarborrado.php';
	
	}else{
		if(!$moto->borrar())
			throw new Exception('No se pudo borrar la moto');
		
		//cargar la vista de éxito
		$mensaje = "La moto $moto->matricula $moto->marca $moto->modelo se borró correctamente.";
		include 'view/exito.php';
		
		//OPCIONAL: no cargar la vista de éxito sino ir al listado
		//include 'controller/listar.php';
	}
?>