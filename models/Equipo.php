<?php

class Equipo extends Modelo{
    public $nombre_tabla = 'equipo';
    public $pk = 'id_usuario';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'id_pais'=>array(),
        'escudo'=>array(),
        
    );
    
    public $errores = array( );
    
    private $nombre;    
    private $id_pais;
    private $escudo;
    
       
    
    function Equipo(){
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