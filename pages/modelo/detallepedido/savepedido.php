<?php

session_start();
include_once("detalleCollector.php");
$usuario = $_SESSION['torres'];
$id_plato = $_POST['id_plato'];
$id_pedido = $_POST['id_pedido'];
$nombre = $_POST['nombre'];

$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$DemoCollectorObj = new detalleCollector;


$total2 = $cantidad *$precio;

?>





<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="estilo.css" rel="stylesheet">
        
         <body>
  
        <?php
         
        $totalVenta  =  $cantidad*$cantidad;
        $DemoCollectorObj->createpedido($id_plato,$id_pedido,$nombre,$cantidad,$precio,$totalVenta);
        $mensaje = "EL pedido se grabo correctamente";
        
        ?>
  
    </body>
    	
    
    </head>
    <body>
  
    
        
        
  
        
      <a href="readpedido.php"> <button>VOLVER</button></a>
  
    </body>
</html>
