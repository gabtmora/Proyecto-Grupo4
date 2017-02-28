<?php

class Demo
{
    private $id_usuario;
    private $id_persona;
    private $usuario;
    private $clave;
    private $fecha_registro;
    private $estado;

   
     function __construct($id_usuario, $id_persona, $usuario, $clave, $fecha_registro, $estado) {
       $this->id_usuario = $id_usuario;
       $this->usuario = $usuario;
       $this->clave = $clave;
       $this->fecha_registro = $fecha_registro;
       $this->estado = $estado;
     }
    
     function setId_usuario($id_usuario){
       $this->id_usuario = $id_usuario;
     } 
     function getId_usuario(){
       return $this->id_usuario;
     } 
     function setId_persona($id_persona){
       $this->id_persona = $id_persona;
     } 
     function getId_persona(){
       return $this->id_persona;
     } 

     function setUsuario($usuario){
       $this->usuario = $usuario;
     } 
     function getUsuario(){
       return $this->usuario;
     }
    
     function setClave($clave){
       $this->clave = $clave;
     } 
     function getClave(){
       return $this->clave;
     } 

     function setFecha_registro($fecha_registro){
       $this->fecha_registro = $fecha_registro;
     } 
     function getFecha_registro(){
       return $this->fecha_registro;
     }

     function setEstado($estado){
       $this->estado = $estado;
     } 
     function getEstado(){
       return $this->estado;
     }
}

?> 
