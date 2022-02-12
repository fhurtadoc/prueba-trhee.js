<?php

class Conexion {
    private $host ="localhost";
    private $usuario ='';
    private $clave ='';
    private $db ='';
    public  $conexion;
    
    public function __construct(){
        $this->conexion = new mysqli ($this->host, $this->usuario, $this->clave,$this->db);
    }
    
    public function query($query){

        $resultado=$this->conexion->query($query);        
        if($resultado){
            return $resultado; 
        }
            
        

    }

    public function getArray($query){

        $resultado=$this->conexion->query($query);        
        if($resultado){
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

    }

}