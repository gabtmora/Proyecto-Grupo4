<?php
session_start();
include_once("detalleCollector.php");
$usuario = $_SESSION['torres'];
$id_detalle = $_POST['id_detalle'];
$id_plato = $_POST['id_plato'];
$id_pedido = $_POST['id_pedido'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$total = $_POST['total'];
$DemoCollectorObj = new detalleCollector;


$total2 = $cantidad *$precio;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="../estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
        <?php
        echo "<p>EL Menu  SE MODIFICO EXITOSAMENTE</p>";
        $DemoCollectorObj->updatepedido($id_detalle,$cantidad,$precio,$total2);
        ?>
        <a href="readpedido.php"><button>VOLVER</button></a>
       
  
    </body>
</html>