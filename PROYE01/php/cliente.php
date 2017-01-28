<?php

class cliente
{
    private $id_cliente;
    private $RUC;
    private $razon_social;
    private $tipo_cliente ;
    private $direccion ;
    private $telefono ;
    private $estado ;
    
     function __construct($id_cliente, $RUC,$razon_social,$tipo_cliente,$direccion,$telefono,$estado) {
       $this->idDemo = $idDemo;
       $this->nombre = $nombre;
         
         
        $this-> id_cliente    = $id_cliente;
        $this-> RUC           = $RUC;
        $this-> razon_social  = $razon_social;
        $this-> tipo_cliente  = $tipo_cliente ;
        $this-> direccion     = $direccion ;
        $this-> telefono      = $telefono ;
        $this-> estado        = $estado ;
     }
    
     function setIdDemo($id_cliente){
       $this->id_cliente = $id_cliente;
     } 
     function getIdDemo(){
       return $this->id_cliente;
     } 
     function setNombre($RUC){
       $this->RUC = $RUC;
     } 
     function getNombre(){
       return $this->RUC;
     } 
    
    
      function setNombre($razon_social){
       $this->razon_social = $razon_social;
     } 
     function getNombre(){
       return $this->razon_social;
     } 
    
    
       function setNombre($tipo_cliente){
       $this->tipo_cliente = $tipo_cliente;
     } 
     function getNombre(){
       return $this->tipo_cliente;
     } 
    
    
         function setNombre($direccion){
       $this->direccion = $direccion;
     } 
     function getNombre(){
       return $this->direccion;
     } 
    
    
         function setNombre($telefono){
       $this->telefono = $telefono;
     } 
     function getNombre(){
       return $this->telefono;
     } 
    
    
    function setNombre($estado){
       $this->estado = $estado;
     } 
     function getNombre(){
       return $this->estado;
     } 
    
    
}

?> 


