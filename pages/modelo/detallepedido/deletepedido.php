<?php
session_start();


include_once("detalleCollector.php");

$id_detalle = $_GET['id_detalle'];


$DemoCollectorObj = new detalleCollector();
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
        echo "<p>Se elimino el Menu " . $id_detalle ."?</p>";
        $DemoCollectorObj->deletepedido($id_detalle);
        ?>
        <a href="readpedido.php"><button>VOLVER</button></a>
       
  
    </body>
</html>
