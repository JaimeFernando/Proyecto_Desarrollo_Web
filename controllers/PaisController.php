<?php
	class PaisController extends Pais{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Pais();
			 
		}

		

		public function insertaPais($datos,$archivos){
			echo "<pre>datos:";
    		print_r($datos);
    		print_r($archivos);
    		echo "</pre>";
			
			$this->set_nombre($datos['nombre']);
			$this->set_bandera($archivos['bandera']['name']);
			$this->set_id_continente($datos['id_continente']);
			if (count($this->errores)>0) {
				print_r($this->errores);
				# code...
				$this->muestra_errores = true;
			}
						
			else{
				$this->inserta($this->get_atributos());
				move_uploaded_file($archivos['bandera']['tmp_name'],
						"../img/".$archivos['bandera']['name']);
				
			}
			
		}
		public function alertas()
					{
						
							if($this->muestra_errores){
							
							echo '<div class="alert alert-danger">';
		           
									foreach($this->errores as $value){
										echo "<p>$value</p>";
									}
								
							echo "</div>";		                   	
							}
						  
			}

	}


?>