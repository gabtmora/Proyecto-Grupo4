<?php

include_once('menu.php');
include_once('../collector.php');

class menuCollector extends collector
{
  
  function showmenus() {
    $rows = self::$db->getRows("SELECT * FROM menu ");        
    ##echo "linea 1";
    $arraymenu= array();        
    foreach ($rows as $c){
      $aux = new menu($c{'orden'},$c{'nombre'},$c{'estado'},$c{'tipo_menu'});
      

      
      array_push($arraymenu, $aux);
    }
    return $arraymenu;        
  }
    
    function createmenu($orden,$nombre,$estado,$tipo_menu) {
        $rows = self::$db->insertRow("INSERT INTO menu (orden, nombre,estado,tipo_menu) VALUES ('$orden', '$nombre',$estado,'$tipo_menu')",null);
        
    }
    
    function updatemenu($orden,$nombre,$estado,$tipo_menu) {
        $rows = self::$db->updateRow("UPDATE menu SET orden='$orden',
        nombre='$nombre', estado='$estado' ,tipo_menu=' $tipo_menu ' WHERE orden='$orden'",null);
        
    }
    
     function deletemenu($orden) {
         $rows = self::$db->deleteRow("DELETE FROM menu WHERE orden ='$orden'",null);
         
   
   }
   
    
    
  
 }
?>

