<?php
class cliente
{
    private $id_reserva;
    private $id_restaurante;
    private $id_mesa;
    private $id_pedido ;
    private $fecha ;
    private $tipoReserva
    private $descripcion ;
    
     function __construct($id_reserva, $id_restaurante,$id_mesa,$id_pedido,$fecha,$tipoReserva,$descripcion) {
     
         
         
        $this-> id_reserva       = $id_reserva;
        $this-> id_restaurante   = $id_restaurante;
        $this-> id_mesa          = $id_mesa;
        $this-> id_pedido        = $id_pedido ;
        $this-> fecha            = $fecha ;
        $this-> tipoReserva      = $fecha ;
        $this-> descripcion      = $estado ;
     }
     
        function setNombre($id_reserva){
       $this->id_usuario = $id_reserva;
     } 
     function getNombre(){
       return $this->id_reserva;
     } 
    
    
     function setIdDemo($id_cliente){
       $this->id_cliente = $id_cliente;
     } 
     function getIdDemo(){
       return $this->id_cliente;
     } 
  
    
      function setNombre($id_restaurante){
       $this->razon_social = $id_restaurante;
     } 
     function getNombre(){
       return $this->id_restaurante;
     } 
    
    
       function setNombre($id_mesa){
       $this->tipo_cliente = $id_mesa;
     } 
     function getNombre(){
       return $this->id_mesa;
     } 
    
    
         function setNombre($id_pedido){
       $this->direccion = $id_pedido;
     } 
     function getNombre(){
       return $this->id_pedido;
     } 
    
    
         function setNombre($fecha){
       $this->cantidad = $fecha;
     } 
     function getNombre(){
       return $this->fecha;
     } 
     
     
       function setNombre($tipoReserva){
       $this->fecha = $tipoReserva;
     } 
     function getNombre(){
       return $this->tipoReserva;
     } 
    
    
    function setNombre($descripcion){
       $this->estado = $descripcion;
     } 
     function getNombre(){
       return $this->descripcion;
     } 
    
    
}

?> 