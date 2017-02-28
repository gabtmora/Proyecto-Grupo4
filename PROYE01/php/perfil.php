<?php
class PERFIL
{
    private $id_perfil;
    private $descripcion;
       private $estado ;

    
     function __construct($id_perfil, $descripcion,$estado) {
     
         
         
        $this-> id_perfil       = $id_perfil;
        $this-> descripcion    = $descripcion;
        $this-> estado         = $estado ;
       
     }
     
        function setNombre($id_perfil){
       $this->$id_perfil = $id_perfil;
     } 
     function getNombre(){
       return $this->$id_perfil;
     } 
    
    
     function setIdDemo($descripcion){
       $this->id_cliente = $descripcion;
     } 
     function getIdDemo(){
       return $this->descripcion;
     } 
  
        
       function setNombre($estado){
       $this->tipo_cliente = $estado;
     } 
     function getNombre(){
       return $this->estado;
     } 
    
    
          
    
}

?> 