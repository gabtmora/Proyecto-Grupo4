<?php
session_start();

include_once("../Demo_collecctor/DemoCollector.php");
	$id_usuario = $_POST['id_usuario'];
	$id_persona = $_POST['id_persona'];
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$fecha_registro = $_POST['registro'];
	$estado = $_POST['estado'];


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
        echo "<p>Se creo un nuevo usuario</p>";
        $DemoCollectorObj->createDemo($id_usuario, $id_persona, $usuario, $clave, $fecha_registro, $estado);
        ?>

        <a href="read_Demo.php"><button>VOLVER</button></a>
       
  
    </body>
</html>
