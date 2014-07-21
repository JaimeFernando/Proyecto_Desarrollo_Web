<?php
	class EquipoController extends Equipo{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Equipo();
			 
		}

		

		public function insertaEquipo($datos,$archivos){
			//echo "<pre>datos:";
    		//print_r($datos);
    		//print_r($archivos);
    		//echo "</pre>";
			//$equipo = new Equipo();
			$this->set_nombre($datos['nombre']);
			$this->set_id_pais($datos['id_pais']);
			$this->set_escudo($archivos['escudo']);
			if (count($this->errores)>0) {
				//print_r($this->errores);
				# code...
				$this->muestra_errores = true;
				
			}
			else{
				$this->inserta($this->get_atributos());
				move_uploaded_file($archivos['escudo']['tmp_name'], "../escudos/".$archivos['escudo']['name']);
			}	
			
		}


	}


?>