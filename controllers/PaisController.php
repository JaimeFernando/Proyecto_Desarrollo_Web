<?php
	class PaisController extends Pais{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Pais();
			 
		}

		

		public function insertaPais($datos,$archivos){
			//echo "<pre>datos:";
    		//print_r($datos);
    		//print_r($archivos);
    		//echo "</pre>";
			//$pais = new Pais();
			$this->set_nombre($datos['nombre']);
			$this->set_bandera($archivos['bandera']);
			$this->set_id_continente($datos['id_continente']);
			if (count($this->errores)>0) {
				//print_r($this->errores);
				# code...
				$this->muestra_errores = true;
			}
						
			else{
				$this->inserta($this->get_atributos());
				move_uploaded_file($archivos['bandera']['tmp_name'], "../banderas/".$archivos['bandera']['name']);
			}
			
		}

	}


?>