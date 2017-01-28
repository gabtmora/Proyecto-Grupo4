<?php
class convenio
{
    private $id_convenio;
    private $id_restaurante;
    private $numero_contrato;
    private $representante ;
    private $fecha_inicio ;
    private $fecha_fin
    private $estado ;
    
     function __construct($id_convenio, $id_restaurante,$numero_contrato,$representante,$fecha_inicio,$fecha_fin,$estado) {
     
         
         
        $this-> id_convenio      = $id_convenio;
        $this-> id_restaurante   = $id_restaurante;
        $this-> numero_contrato  = $numero_contrato;
        $this-> representante    = $representante ;
        $this-> fecha_inicio     = $fecha_inicio ;
        $this-> fecha_fin        = $fecha_fin ;
        $this-> estado           = $estado ;
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
