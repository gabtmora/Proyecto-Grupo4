<?php

include_once('../clases_demo/demo_cliente.php');
include_once('../conexion/Collector.php');

class ClienteCollector extends Collector
{
  
	function showDemos() {
		$rows = self::$db->getRows("SELECT * FROM cliente ");
		##echo "linea 1";
		$arrayDemo= array();
		foreach ($rows as $c){
			$aux = new demo_cliente($c{'id_cliente'},$c{'ruc'},$c{'razon_social'},$c{'tipo_cliente'},$c{'direccion'},$c{'telefono'},$c{'estado'});
			array_push($arrayDemo, $aux);
			
			
		}
		return $arrayDemo;
	}
    
    ##function deleteDemo($id) {
     ## $rows = self::$db->deleteRow("DELETE FROM postgres WHERE id=$id",null);  
 
   
    function createDemo($id_cliente, $ruc, $razon_social, $tipo_cliente, $direccion, $telefono,$estado) {
        $rows = self::$db->insertRow("INSERT INTO postgres (id_cliente, ruc, razon_social, tipo_cliente, direccion, telefono,estado) VALUES ('$id_cliente', '$ruc', '$razon_social', '$tipo_cliente', '$direccion', '$telefono','$estado')",null);
        
    }
}
?>

