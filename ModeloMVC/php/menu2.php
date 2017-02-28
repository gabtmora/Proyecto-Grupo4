<?php
class MENU
{
    private $orden;
    private $nombre;
    private $teclado;
    private $estado ;

    
     function __construct($orden, $nombre,$teclado,$estado) {
     
         
         
        $this-> orden        = $orden;
        $this-> nombre       = $nombre;
        $this-> teclado      = $teclado;
        $this-> estado       = $estado ;
       
     }
     
        function setid_plato($orden){
       $this->id_plato = $orden;
     } 
     function getNombre(){
       return $this->id_plato;
     } 
    
    
     function setnombre($nombre){
       $this->id_cliente = $nombre;
     } 
     function getIdDemo(){
       return $this->nombre;
     } 
  
    
      function setteclado($teclado){
       $this->teclado = $teclado;
     } 
     function getteclado(){
       return $this->teclado;
     } 
    
    
       function setestado($estado){
       $this->estado = $estado;
     } 
     function getestado(){
       return $this->estado;
     } 
    
    
          
    
}

?> 