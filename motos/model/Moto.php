<?php
	class Moto{
		//PROPIEDADES
		public $id, $matricula, $marca, $modelo, $color;
		
		//METODOS
		//guardar una moto
		public function guardar(){
			$consulta = "INSERT INTO motos(matricula, marca, modelo, color)
					VALUES('$this->matricula','$this->marca','$this->modelo','$this->color');";
			
			return Database::get()->query($consulta);
		}
		
		//recuperar todas las motos
		//devuelve un array de Moto
		public static function getMotos(){
			$consulta = "SELECT * FROM motos;";
			$resultados = Database::get()->query($consulta);
			
			$motos = array();
			while($moto = $resultados->fetch_object('Moto'))
				$motos[] = $moto;	
		
			$resultados->free();
			return $motos;
		}
		
		//recuperar una moto por id
		//retorna un objeto Moto o null si no la encuentra
		public static function getMoto($id=0){
			$consulta = "SELECT * FROM motos WHERE id=$id;";
			$resultados = Database::get()->query($consulta);
			
			$moto = $resultados->fetch_object('Moto');
			$resultados->free();
			return $moto;
		}
		
		//borrar una moto 
		public function borrar(){
			$consulta = "DELETE FROM motos WHERE id=$this->id;";
			
			Database::get()->query($consulta);
			return Database::get()->affected_rows;
		}
		
		//modificar una moto
		public function modificar(){
			$consulta = "UPDATE motos SET
							matricula='$this->matricula',
							marca='$this->marca',
							modelo='$this->modelo',
							color='$this->color'
						WHERE id=$this->id;";
			
			Database::get()->query($consulta);
			return Database::get()->affected_rows;
		}
	}
?>