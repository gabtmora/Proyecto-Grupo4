<?php
class PLATO
{
    private $id_plato;
    private $descripcion;
    private $precio;
    private $estado ;

    
     function __construct($id_plato, $descripcion,$precio,$estado) {
     
         
         
        $this-> id_plato       = $id_plato;
        $this-> descripcion    = $descripcion;
        $this-> precio         = $precio;
        $this-> estado         = $estado ;
       
     }
     
        function setNombre($id_plato){
       $this->id_plato = $id_plato;
     } 
     function getNombre(){
       return $this->id_plato;
     } 
    
    
     function setIdDemo($descripcion){
       $this->id_cliente = $descripcion;
     } 
     function getIdDemo(){
       return $this->descripcion;
     } 
  
    
      function setNombre($precio){
       $this->razon_social = $precio;
     } 
     function getNombre(){
       return $this->precio;
     } 
    
    
       function setNombre($estado){
       $this->tipo_cliente = $estado;
     } 
     function getNombre(){
       return $this->estado;
     } 
    
    
          
    
}

?> 