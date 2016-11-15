<?php
	try{

		//LAS URLS tendrán la forma
		//.../index.php?operacion=loquesea&parametro=mascosas
		//recuperar la operación (por defecto será "portada")
		$operacion = empty($_GET['operacion'])? 'portada' : $_GET['operacion'];
		
		//comprobar si existe
		if(!is_readable('controller/'.$operacion.'.php'))
			throw new Exception('no existe la operación '.$operacion);
		
		//ejecutar la operación
		require 'controller/'.$operacion.'.php';
		
		
	}catch(Exception $e){
		$mensaje = 'ERROR: '.$e->getMessage();
		include 'view/error.php';
	}
	
	
	
	
?>