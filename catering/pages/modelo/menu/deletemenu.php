<?php
session_start();
include_once("menuCollector.php");

$orden = $_GET['orden'];


$DemoCollectorObj = new menuCollector();
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
        echo "<p>Se elimino el Menu " . $orden ."?</p>";
        $DemoCollectorObj->deletemenu($orden);
        ?>
        <a href="readmenu.php"><button>VOLVER</button></a>
       
  
    </body>
</html>
