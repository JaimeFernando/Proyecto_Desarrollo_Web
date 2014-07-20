<?php

class Ciudad extends Modelo{
    public $nombre_tabla = 'ciudad';
    public $pk = 'id_ciudad';
    
    
    public $atributos = array(
        'nombre'=>array(),
                
    );
    
    public $errores = array( );
    
    private $nombre;      
       
    
    function Ciudad(){
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