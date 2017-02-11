<?php

include_once('Usuario.php');
include_once('../collector.php');

class UsuarioCollector extends collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    ##echo "linea 1";
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new usuario($c{'id_usuario'},$c{'usuario'},$c{'clave'},$c{'fecha_registro'},$c{'estado'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
    
    function createUsuario($usuario,$clave) {
        $rows = self::$db->insertRow("INSERT INTO usuario (usuario, clave) VALUES ('$usuario', '$clave')",null);
        
    }
    
    function updateUsuario($id_usuario,$usuario,$clave) {
        $rows = self::$db->updateRow("UPDATE usuario SET usuario='$usuario',
clave='$clave' WHERE id_usuario='$id_usuario'",null);
        
    }
    
     function deleteUsuario($id) {
         $rows = self::$db->deleteRow("DELETE FROM usuario WHERE id_usuario=$id",null);
         
   
   }
    
    
  
 }
?>

