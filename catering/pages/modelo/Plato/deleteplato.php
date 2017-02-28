<?php
session_start();
include_once("platoCollector.php");

$id_plato = $_GET['id_plato'];


$DemoCollectorObj = new platoCollector();
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
        echo "<p>Se elimino el Menu " . $id_plato ."?</p>";
        $DemoCollectorObj->deleteplato($id_plato);
        ?>
        <a href="readplato.php"><button>VOLVER</button></a>
       
  
    </body>
</html>
