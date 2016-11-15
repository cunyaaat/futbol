<?php		
class Database{	
    //propiedad que almacenará la conexión establecida con la BDD (objeto mysqli)
	private static $conexion = null;	
	
	//método que establece o recupera la conexión.
	public static function get(){	
		//notifica los Warnings como errores.
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		//si no se había conectado antes...
		if(empty(self::$conexion)){	
			//conecta con la BDD y guarda el objeto mysqli en la propiedad estática $conexion
			self::$conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

			//establece el charset a UTF8
			self::$conexion->set_charset(DB_CHARSET);
		}
		return self::$conexion; //retornar la conexión
	}	
}
?>