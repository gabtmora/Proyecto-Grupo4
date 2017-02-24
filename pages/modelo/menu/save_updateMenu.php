<?php
session_start();
include_once("menuCollector.php");


$orden = $_POST['orden'];
$nombre = $_POST['nombre'];
$estado = $_POST['estado'];
$tipo_menu = $_POST['tipo_menu'];


$MenuCollectorObj = new menuCollector();
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
        $MenuCollectorObj->updatemenu($orden,$nombre,$estado,$tipo_menu);
        ?>
        <a href="readmenu.php"><button>VOLVER</button></a>
       
  
    </body>
</html>