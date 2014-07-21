<?php
	class EstadioController extends Estadio{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Estadio();
			 
		}

		

		public function insertaEstadio($datos){
			echo "<pre>datos:";
    		print_r($datos);
    		echo "</pre>";
			//$estadio = new Estadio();
			$this->set_nombre($datos['nombre']);
			$this->set_id_ciudad($datos['id_ciudad']);
			if (count($this->errores)>0) {
				//print_r($estadio->errores);
				# code...
				$this->muestra_errores = true;

			}
			else{
				$this->inserta($this->get_atributos());
				
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