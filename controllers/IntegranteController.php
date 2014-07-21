<?php
	class IntegranteController extends Integrante{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Integrante();
			 
		}

		

		public function insertaIntegrante($datos,$archivos){
			//echo "<pre>datos:";
    		//print_r($datos);
    		//print_r($archivos);
    		//echo "</pre>";
			//$integrante = new Integrante();
			$this->set_nombre($datos['nombre']);
			$this->set_apellido($datos['apellido']);
			$this->set_peso($datos['peso']);
			$this->set_estatura($datos['estatura']);
			$this->set_foto($archivos['foto']);
			$this->set_edad($datos['edad']);
			$this->set_id_equipo($datos['id_equipo']);
			if (count($this->errores)>0) {
				//print_r($this->errores);
				# code...
				$this->muestra_errores = true;
				
			}
			else{
				$this->inserta($this->get_atributos());
				move_uploaded_file($archivos['foto']['tmp_name'], "../fotos/".$archivos['foto']['name']);
			}
			
			
		}





	}


?>