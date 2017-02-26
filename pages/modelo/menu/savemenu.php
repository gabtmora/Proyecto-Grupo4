<?php
session_start();
?>
<?php
include_once("menuCollector.php");
$nombre =  $_POST['descripcion'];
$estado = $_POST['estado'];
$menuCollectorObj = new menuCollector();
?>
<?php
    $rol = $_GET['rol'];
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
        $estado2 = substr("$estado", 0,1);
        if($menuCollectorObj->buscarMenu($nombre)){
            $mensaje = "ERROR EL MENU YA SE ENCUENTRA REGISTRADO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=createmenu.php?rol=$rol'>";
        }
        else{
        $menuCollectorObj->createmenu($nombre, $estado2);
        $mensaje = "EL MENU SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readmenu.php?rol=$rol'>";
        }
        ?>
  
    </body>
</html>
