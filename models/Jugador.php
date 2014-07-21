<?php

class Jugador extends Modelo{
    public $nombre_tabla = 'jugador';
    public $pk = 'id_jugador';
    
    
    public $atributos = array(
        'numero'=>array(),
        'id_integrante'=>array(),
        'id_posicion'=>array(),               
    );
    
    public $errores = array( );
    
    private $numero;    
    private $id_integrante;
    private $id_posicion;   
    
       
    
    function Jugador(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }

    public function get_numero(){
        return $this->numero;
    } 

    public function set_numero($valor){         
        $er = new Er();        
        if ( !$er->validar_entero($valor) ){
            $this->errores[] = "este numero  (".$valor.") no es valido";        
        }else{
            $this->numero = trim($valor);
        }                
             
    }


    public function get_id_integrante(){
        return $this->id_integrante;
    } 

    public function set_id_integrante($valor){       
      $this->id_integrante = trim($valor);  
        
    }


    
    public function get_id_posicion(){
        return $this->estatura;
    } 

    public function set_id_posicion($valor){
        $this->id_posicion = trim($valor);             
     }

    
}

?>