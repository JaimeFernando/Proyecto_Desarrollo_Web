<?php

class Continente extends Modelo{
    public $nombre_tabla = 'continente';
    public $pk = 'id_continente';
    
    
    public $atributos = array(
        'nombre'=>array(),        
    );
    
    public $errores = array( );
    
    private $nombre;       
       
    
    function Continente(){
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