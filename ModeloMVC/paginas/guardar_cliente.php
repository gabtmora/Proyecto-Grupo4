<?php
session_start();

include_once("../Demo_collecctor/DemoCollector.php");
include_once("../Demo_collecctor/menu_item_Collector.php");
include_once("../Demo_collecctor/ClienteCollector.php");


$DemoCollectorClienteObj = new ClienteCollector();



$ruc          =$_GET['ruc'];
$razon_social =$_GET['razon_social'];
$tipo_cliente =$_GET['tipo_cliente']; 
$direccion    =$_GET['direccion'];
$telefono     =$_GET['telefono'];
$estado       =$_GET['estado'];

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
    
        <?php
        echo "<p>Se creo cliente </p>";
        $DemoCollectorClienteObj->createDemo( $ruc, $razon_social, $tipo_cliente, $direccion, $telefono,$estado);
        ?>

        <a href="cliente.php"><button>VOLVER</button></a>
       
  
    </body>
</html>
 
