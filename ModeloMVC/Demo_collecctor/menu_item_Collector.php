<?php

include_once('../clases_demo/menu.php');
include_once('../clases_demo/submenu.php');
include_once('../conexion/Collector.php');

class menu_item_Collector extends Collector
{
  
  function showmenu() {
    $rows = self::$db->getRows("SELECT * FROM menu_adminis ");        
    ##echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new menu($c{'id'},$c{'nombre'});
      
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;  
   
  }
  
  
  function showmenuitem($id) {
  	$rows = self::$db->getRows("SELECT id_item,nombre_item,menu_id,cont_item FROM submenu WHERE menu_id = '".$id."'");
   
  	$arrayDemo= array();
  	
  	foreach ($rows as $c){
  		$aux = new submenu($c{'id_item'},$c{'nombre_item'},$c{'menu_id'},$c{'cont_item'});
  		
  	
  		
     
  		array_push($arrayDemo, $aux);
  	}
  	return $arrayDemo;
 
  	
  }
    
  
}
?>

