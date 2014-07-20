<?php

class Pais extends Modelo{
    public $nombre_tabla = 'pais';
    public $pk = 'id_pais';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'bandera'=>array(),
        'id_continente'=>array(),
                
    );
    
    public $errores = array( );
    
    private $nombre;    
    private $bandera;
    private $id_continente;
    
       
    
    function Pais(){
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