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
 
   
    function createDemo( $ruc, $razon_social, $tipo_cliente, $direccion, $telefono,$estado) {
        $rows = self::$db->insertRow("INSERT INTO cliente ( ruc, razon_social, tipo_cliente, direccion, telefono,estado) VALUES ( '$ruc', '$razon_social', '$tipo_cliente', '$direccion', '$telefono','$estado')",null);
        
        
    }
    
    function eliminarDemos($id_cliente) {
    	$rows = self::$db->getRows("DELETE FROM cliente WHERE id_cliente=$id_cliente");
    
    }
    
    function updatedemo($id_cliente,$ruc, $razon_social, $tipo_cliente, $direccion, $telefono,$estado) {
    	$rows = self::$db->getRows(" update  cliente
    			                     set ruc            = $ruc,
    			                         razon_social   = $razon_social,
    			                         tipo_cliente   = $tipo_cliente,
    			                         direccion      = $direccion,
    			                         telefono       = $telefono,
    			                         estado         = $estado
    			                         
    			                   FROM cliente WHERE id_cliente=$id_cliente");
    
    }
    
    
}
?>

