<?php

include_once('../plato/plato.php');
include_once('../collector.php');

class detalleCollector extends collector
{
  
 
  
  function consulta($busqueda){
  	$sql="select * from plato  where descripcion  like '%$busqueda%' or id_plato='$busqueda'";
  	$error="<div class='error'>Error al buscar el producto</div>";
  	$arrayplato= array();
   $consulta= self::$db->getRows($sql);
  		
  	 	
  	foreach ($consulta as $c){
  		$aux = new plato($c{'id_plato'},$c{'descripcion'},$c{'precio'},$c{'estado'},$c{'tipo_plato'});
  	
  	  		array_push($arrayplato, $aux);
  	}
  	return $arrayplato;
  	

 
  }
  
  function consulta2($busqueda){
  	$sql="select * from plato  where  id_plato='$busqueda'";
  	$error="<div class='error'>Error al buscar el producto</div>";
  	$arrayplato= array();
  	$consulta= self::$db->getRows($sql);
  
  		
  	foreach ($consulta as $c){
  		$aux = new plato($c{'id_plato'},$c{'descripcion'},$c{'precio'},$c{'estado'},$c{'tipo_plato'});
  		 
  		array_push($arrayplato, $aux);
  	}
  	return $arrayplato;
  	 
  
  
  }
  
    
    function createpedido($id_plato,$id_pedido,$descripcion,$cantidad,$precio,$total) {
        $rows = self::$db->insertRow("INSERT INTO detalle_pedido (id_plato, id_pedido,descripcion,cantidad,precio,total) VALUES ('$id_plato', '$id_pedido','$descripcion',$cantidad,$precio,$total)",null);
        
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

