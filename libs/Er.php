<?php

class Er {

	//validar un nombre de usuario con un mínimo de 4 caracteres y un máximo de 15
	public function valida_nombre($nombre){
		return preg_match('#^ [a-z]  [\da-z_] {6,22} [a-z\d] \$#i', $nombre);

	}
    //validar email
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	//verificar si un password es seguro
	public function valida_password($password){
		if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password)) 
			echo "Su password es seguro."; 
		else echo "Su password no es seguro.";

	}

	//validar fecha
	public function validar_Fecha($fecha){
			    return preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha);
			}

	//validar un entero
		public function validar_entero($entero){
			$exp_reg = '^(?:\+|-)?\d+$'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 

		}

	//validar hora
		public function validar_hora($hora){
			$exp_reg = '^(0[1-9]|1\d|2[0-3]):([0-5]\d):([0-5]\d)$'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 

		}

			//validar fecha

		public function valida_fecha2($fecha){
			$exp_reg = '^\d{1,2}\/\d{1,2}\/\d{2,4}$'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 

		}
		//validar numero decimales
	public function valida_decimales($valor){
		$exp_reg = '^[0-9]{1,5}(\.[0-9]{0,2})?$'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}



}

?>    