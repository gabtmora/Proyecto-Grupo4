<?php
session_start();
include_once("UsuarioCollector.php");

$id_usuario = $_POST['id_usuario'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];


$usuarioCollectorObj = new UsuarioCollector();
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
        echo "<p>EL USUARIO SE MODIFICO EXITOSAMENTE</p>";
        $usuarioCollectorObj->updateUsuario($id_usuario,$usuario,$clave);
        ?>
        <a href="readUsuario.php"><button>VOLVER</button></a>
       
  
    </body>
</html>