<?php

class Estadio extends Modelo{
    public $nombre_tabla = 'estadio';
    public $pk = 'id_estadio';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'id_ciudad'=>array(),
        
    );
    
    public $errores = array( );
    
    private $nombre;    
    private $id_cuidad;    
       
    
    function Estadio(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){

        $er = new Er();
        
        //if ( !$er->valida_nombre($valor) ){
            //$this->errores[] = "Este nombre (".$valor.") no es valido";
        //}

               
        $this->nombre = trim($valor);
        
    }
    public function get_id_cuidad(){
        return $this->id_cuidad;
    } 

    public function set_id_cuidad($valor){

        $er = new Er();
               
        $this->id_cuidad = trim($valor);
        
    }
}

?>