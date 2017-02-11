<?php
session_start();
include_once("UsuarioCollector.php");

$id = $_GET['ID'];


$DemoCollectorObj = new UsuarioCollector();
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
        $DemoCollectorObj->deleteUsuario($id);
        ?>
        <a href="readUsuario.php"><button>VOLVER</button></a>
       
  
    </body>
</html>
