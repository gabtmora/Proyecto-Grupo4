<?php
session_start();
include_once("DemoCollector.php");

$id = $_GET['ID'];


$DemoCollectorObj = new DemoCollector();
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
        echo "<p>Se elimino el usuario" . $id ."?</p>";
        $DemoCollectorObj->delete_Demo($id);
        ?>
        <a href="read_Demo.php"><button>VOLVER</button></a>
       
  
    </body>
</html>
