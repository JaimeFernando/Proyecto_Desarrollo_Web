<?php
	class JugadorController extends Jugador{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Jugador();
			 
		}

		

		public function insertaJugador($datos){
			echo "<pre>datos:";
    		print_r($datos);    		
    		echo "</pre>";
			//$integrante = new Integrante();
			$this->set_nombre($datos['numero']);
			$this->set_id_integrante($datos['id_integrante']);
			$this->set_id_posicion($datos['id_posicion']);
			

			if (count($this->errores)>0) {
				print_r($this->errores);
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