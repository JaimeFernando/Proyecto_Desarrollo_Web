<?php
	class CiudadController extends Ciudad{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Ciudad();
			 
		}

		

		public function insertaCiudad($datos){
			//echo "<pre>datos:";
    		//print_r($datos);
    		//echo "</pre>";
			//$this = new Continente();
			$this->set_nombre($datos['nombre']);
			if (count($this->errores)>0) {
				//print_r($this->errores);
				# code...
				$this->muestra_errores = true;
			}
			else{
				$this->inserta($this->get_atributos());
			}
				

			
		}



	}


?>