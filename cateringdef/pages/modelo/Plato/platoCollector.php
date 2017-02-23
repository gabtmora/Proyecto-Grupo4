<?php

include_once('plato.php');
include_once('../collector.php');

class platoCollector extends collector
{
  
  function showplatos() {
    $rows = self::$db->getRows("SELECT * FROM plato order by id_plato ");        
    ##echo "linea 1";
    $arrayplato= array();        
    foreach ($rows as $c){
      $aux = new plato($c{'id_plato'},$c{'descripcion'},$c{'precio'},$c{'estado'},$c{'tipo_plato'});
      
    

      
      array_push($arrayplato, $aux);
    }
    return $arrayplato;        
  }
    
    function createplato($descripcion,$precio,$estado,$tipo_plato) {
        $rows = self::$db->insertRow("INSERT INTO plato ( descripcion,precio,estado,tipo_plato) VALUES ('$descripcion', '$precio',$estado,$tipo_plato)",null);
        
    }
    
    function updateplato($id_plato,$descripcion,$precio,$estado,$tipo_plato) {
    	
    	echo $tipo_plato;
    	
        $rows = self::$db->updateRow("UPDATE plato SET descripcion='$descripcion',
        precio='$precio', estado='$estado' ,tipo_plato='$tipo_plato' WHERE id_plato ='$id_plato'",null);
        
    }
    
     function deleteplato($id_plato) {
         $rows = self::$db->deleteRow("DELETE FROM plato WHERE id_plato ='$id_plato'",null);
         
   
   }
   
    
    
  
 }
?>

