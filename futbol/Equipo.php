<?php
	class Equipo{
		//PROPIEDADES
		public $id, $nombre, $estadio, $categoria, $fecha_fundacion;

		
		//OPERACIONES CRUD
		//C guardar un equipo
		//public boolean guardar()
		public function guardar(){
			//preparar la consulta
			$consulta = "INSERT INTO equipos(nombre, estadio, categoria, fecha_fundacion)
					 VALUES('$this->nombre','$this->estadio','$this->categoria','$this->fecha_fundacion');";
			
			//ejecutar la consulta
			return Database::get()->query($consulta);
		}
		
		//R recuperar un equipo concreto
		//PROTOTIPO public static Equipo recuperar(int $id)
		//devuelve NULL si no encuentra el equipo
		public static function recuperar($id=0){
			//preparar la consulta
			$consulta = "SELECT * FROM equipos 
					WHERE id=$id;";
			
			//ejecutar la consulta
			$datos = Database::get()->query($consulta);
			
			//convierte el dato recuperado a Equipo
			$equipo = $datos->fetch_object('Equipo');
			
			//libera memoria
			$datos->free();
			
			//retornar el equipo recuperado
			return $equipo; 
		}
		
		
		//R recuperar todos los equipos
		//PROTOTIPO public static Array<Equipo> recuperartodo()
		//devuelve [] si no encuentran equipos
		public static function recuperartodo(){
			//preparar la consulta
			$consulta = "SELECT * FROM equipos;";
				
			//ejecutar la consulta
			$datos = Database::get()->query($consulta);
				
			//preparar el array 
			$equipos = array();
			
			//recuperar los resultados
			while($equipo = $datos->fetch_object('Equipo'))
				$equipos[] = $equipo;
			
			//liberar memoria
			$datos->free();
			
			return $equipos;
		}
		
		//R recuperar con filtro
		//PROTOTIPO public static Array<Equipo> recuperarfiltrado($campo, $filtro)
		//devuelve [] si no encuentra equipos coincidentes
		public static function recuperarfiltrado($campo='nombre', $filtro=''){
			//preparar la consulta
			$consulta = "SELECT * FROM equipos
						WHERE $campo LIKE '%$filtro%';";
		
			//ejecutar la consulta
			$datos = Database::get()->query($consulta);
		
			//preparar el array
			$equipos = array();
				
			//recuperar los resultados
			while($equipo = $datos->fetch_object('Equipo'))
				$equipos[] = $equipo;
					
				//liberar memoria
				$datos->free();
					
				return $equipos;
		}
		
		
		//U actualizar un equipo
		//PROTOTIPO: public boolean actualizar()
		public function actualizar(){
			//preparar la consulta
			$consulta = "UPDATE equipos SET
				nombre ='$this->nombre',
				estadio='$this->estadio',
				categoria='$this->categoria',
				fecha_fundacion='$this->fecha_fundacion'
			WHERE id=$this->id;";
				
			//ejecutar la consulta
			return Database::get()->query($consulta);
		}
		
		//D borrar un equipo
		//PROTOTIPO: public static boolean borrar()
		public static function borrar($id=0){
			//preparar la consulta
			$consulta = "DELETE FROM equipos WHERE id='$id';";
				
			//ejecutar la consulta
			$c = Database::get();
			$c->query($consulta);
			
			return $c->affected_rows; 
		}
		
		
		//toString()
		public function __toString(){
			return "EQUIPO: $this->nombre, $this->estadio, $this->categoria, $this->fecha_fundacion";
		}
	}
?>