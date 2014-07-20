<?php

class Posicion extends Modelo{
    public $nombre_tabla = 'posicion';
    public $pk = 'id_posision';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'abreviatura'=>array(),
                
    );
    
    public $errores = array( );
    
    private $nombre;    
    private $abreviatura;  
       
    
    function Posicion(){
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