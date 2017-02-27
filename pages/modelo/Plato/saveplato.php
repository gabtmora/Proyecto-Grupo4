<?php
session_start();
include_once("platoCollector.php");
$descripcion = $_POST['descripcion'];
$precio =  $_POST['precio'];
$estado = $_POST['estado'];
$id_plato;







$platoCollectorObj = new platoCollector();
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
        
        $estado2 = substr ("$estado", 0,1);
        $dir = "../../../images"; //recuerda que debe tener permisos de escritura ;)
        $ext = array('image/jpeg', 'image/gif', 'image/png', 'image/bmp','image/svg'); //Puedes agregar más extenciones
        foreach($_FILES as $archivo) {
        	$attachtmp = $archivo['tmp_name'];
        	$attachtype = $archivo['type'];
        	$attachname = $archivo['name'];
        	if(file_exists($attachtmp)) {
        		if(is_uploaded_file($attachtmp)) {
        			if(in_array($attachtype,$ext)) {
        				$ruta = move_uploaded_file($attachtmp, "$dir/$attachname");
        				
        				$id_plato = "'$dir/$attachname'";
        				
        				$platoCollectorObj->createplato($descripcion, $precio,$estado2,$id_plato );
        			} else {
        				echo "Esto no es una imagen :(";
        			}
        		}
        	}
        }
        

        ?>
        
        
       
        
        
        
        
        
        
        
  
        
      <a href="readplato.php"> <button>VOLVER</button></a>
  
    </body>
</html>
