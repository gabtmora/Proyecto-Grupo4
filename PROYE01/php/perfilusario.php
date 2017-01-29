<?php
class PERFIL_USUARIO
{
    private $id_perfil;
    private $id_usuario;
 
    
     function __construct($id_perfil, $id_usuario) {
     
         
         
        $this-> id_perfil       = $id_perfil;
        $this-> id_usuario    = $id_usuario;
       
       
     }
     
        function setid_perfil($id_perfil){
       $this->id_plato = $id_perfil;
     } 
     function getid_perfil(){
       return $this->id_perfil;
     } 
    
    
     function set$id_usuario($id_usuario){
       $this->id_cliente = $id_usuario;
     } 
     function getid_usuario(){
       return $this->id_usuario;
     } 
  
    
    
    
          
    
}

?> 