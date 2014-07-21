<?php
	class ContinenteController extends Continente{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Continente();
			 
		}

		

		public function insertaContinente($datos){
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