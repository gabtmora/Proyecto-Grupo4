<?php

class cliente
{
    private $id_usuario;
    private $id_cliente;
    private $pedido_reserva;
    private $descripción ;
    private $cantidad ;
    private $fecha ;
    private $estado ;
    
     function __construct($id_usuario, $id_cliente,$pedido_reserva,$descripción,$cantidad,$fecha,$estado) {
     
         
         
        $this-> id_usuario    = $id_usuario;
        $this-> id_cliente           = $id_cliente;
        $this-> pedido_reserva  = $pedido_reserva;
        $this-> descripción  = $descripción ;
        $this-> cantidad     = $cantidad ;
        $this-> fecha      = $fecha ;
        $this-> estado        = $estado ;
     }
     
        function setNombre($id_usuario){
       $this->id_usuario = $id_usuario;
     } 
     function getNombre(){
       return $this->id_usuario;
     } 
    
    
     function setIdDemo($id_cliente){
       $this->id_cliente = $id_cliente;
     } 
     function getIdDemo(){
       return $this->id_cliente;
     } 
  
    
      function setNombre($pedido_reserva){
       $this->razon_social = $pedido_reserva;
     } 
     function getNombre(){
       return $this->pedido_reserva;
     } 
    
    
       function setNombre($tipo_cliente){
       $this->tipo_cliente = $tipo_cliente;
     } 
     function getNombre(){
       return $this->tipo_cliente;
     } 
    
    
         function setNombre($descripción){
       $this->direccion = $descripción;
     } 
     function getNombre(){
       return $this->descripción;
     } 
    
    
         function setNombre($cantidad){
       $this->cantidad = $cantidad;
     } 
     function getNombre(){
       return $this->cantidad;
     } 
     
     
       function setNombre($fecha){
       $this->fecha = $fecha;
     } 
     function getNombre(){
       return $this->cantidad;
     } 
    
    
    function setNombre($estado){
       $this->estado = $estado;
     } 
     function getNombre(){
       return $this->estado;
     } 
    
    
}

?> 


