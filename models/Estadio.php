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
}

?>