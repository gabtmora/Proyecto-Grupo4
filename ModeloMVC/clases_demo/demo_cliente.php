<?php

class demo_cliente
{
    private $id_cliente;
    private $RUC;
    private $razon_social;
    private $tipo_cliente ;
    private $direccion ;
    private $telefono ;
    private $estado ;
    
     function __construct($id_cliente, $RUC,$razon_social,$tipo_cliente,$direccion,$telefono,$estado) {
           
        $this-> id_cliente    = $id_cliente;
        $this-> RUC           = $RUC;
        $this-> razon_social  = $razon_social;
        $this-> tipo_cliente  = $tipo_cliente ;
        $this-> direccion     = $direccion ;
        $this-> telefono      = $telefono ;
        $this-> estado        = $estado ;
     }
    
     function setIdcliente($id_cliente){
       $this->id_cliente = $id_cliente;
     } 
     function getIdcliente(){
       return $this->id_cliente;
     } 
     function setRUC($RUC){
       $this->RUC = $RUC;
     } 
     function getRUC(){
       return $this->RUC;
     } 
    
    
      function setrazon_social($razon_social){
       $this->razon_social = $razon_social;
     } 
     function getrazon_social(){
       return $this->razon_social;
     } 
    
    
       function setipo_cliente($tipo_cliente){
       $this->tipo_cliente = $tipo_cliente;
     } 
     function getipo_cliente(){
       return $this->tipo_cliente;
     } 
    
    
         function setdireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getdireccion(){
       return $this->direccion;
     } 
    
    
         function setelefono($telefono){
       $this->telefono = $telefono;
     } 
     function getelefono(){
       return $this->telefono;
     } 
    
    
    function setestado($estado){
       $this->estado = $estado;
     } 
     function getestado(){
       return $this->estado;
     } 
    
    
}

?> 


