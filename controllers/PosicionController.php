<?php
	class PosicionController extends Posicion{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Posicion();
			 
		}

		

		public function insertaPosicion($datos){
			//echo "<pre>datos:";
    		//print_r($datos);
    		//echo "</pre>";
			//$posicion = new Posicion();
			$this->set_nombre($datos['nombre']);
			$this->set_abreviatura($datos['abreviatura']);
			if (count($this->errores)>0) {
				//print_r($posicion->errores);
				# code...
			}
			else{
				$this->inserta($this->get_atributos());
				
			}
			
		}




	}


?>