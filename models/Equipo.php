<?php

class Equipo extends Modelo{
    public $nombre_tabla = 'equipo';
    public $pk = 'id_equipo';
    
    
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
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){
        $er = new Er();        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }
        $rs = $this->consulta_sql("select * from equipo where nombre = '$valor'");
        $rows = $rs->GetArray();        
        if(count($rows) > 0){
            $this->errores[] = "Este nombre (".$valor.") ya esta registrado"; 
        }else{
            $this->nombre = trim($valor);
        } 
       
        
    }

    public function get_id_pais(){
        return $this->id_pais;
    }

    public function set_id_pais($valor){
                      
        $this->id_pais = trim($valor);
        
    }

    public function get_escudo(){
        return $this->escudo;
    }

    public function set_escudo($valor){

        $er = new Er();
        
        $nombre = $_FILES['escudo']['name'];
        $tipo = $_FILES['escudo']['type'];
        $tamano = $_FILES['escudo']['size'];
        if($tipo == "image/gif" || $tipo == "image/pjpeg" || $tipo == "image/png"){
            if($tamano<=2000000){
                 $this->escudo = trim($valor['name']);
            }    
            
        }     
          
    }
}

?>