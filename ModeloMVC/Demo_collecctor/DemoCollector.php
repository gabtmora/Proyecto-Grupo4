<?php

include_once('../clases_demo/Demo.php');
include_once('../conexion/Collector.php');



class DemoCollector extends Collector
{
  
	function showDemos() {
		$rows = self::$db->getRows("SELECT * FROM usuario ");
		##echo "linea 1";
		$arrayDemo= array();
		foreach ($rows as $c){
			$aux = new Demo($c{'id_usuario'},$c{'id_persona'},$c{'usuario'},$c{'clave'},$c{'fecha_registro'},$c{'estado'});
			array_push($arrayDemo, $aux);
		}
		return $arrayDemo;
	}
	
    
  

  
    ##function deleteDemo($id) {
     ## $rows = self::$db->deleteRow("DELETE FROM postgres WHERE id=$id",null);  
 
   
    function createDemo($id_usuario, $id_persona, $usuario, $clave, $fecha_registro, $estado) {
        $rows = self::$db->insertRow("INSERT INTO postgres (id_usuario, id_persona, usuario, clave, fecha_registro, estado) VALUES ('$id_usuario', '$id_persona', '$usuario', '$clave', '$fecha_registro', '$estado')",null);
        
    }
}
?>

