<?php
session_start();
include_once("platoCollector.php");

$id_plato = $_POST['id_plato'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$estado = $_POST['estado'];


$tipo_plato ;

echo $estado ;



$PlatoCollectorObj = new platoCollector();
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
        
        $dir = "../../../images"; //recuerda que debe tener permisos de escritura ;)
        $ext = array('image/jpeg', 'image/gif', 'image/png', 'image/bmp','image/svg'); //Puedes agregar más extenciones
        $tipo_plato  = "no se guardo imagen ";
        foreach($_FILES as $archivo) {
        	$attachtmp = $archivo['tmp_name'];
        	$attachtype = $archivo['type'];
        	$attachname = $archivo['name'];
        	if(file_exists($attachtmp)) {
        		if(is_uploaded_file($attachtmp)) {
        			if(in_array($attachtype,$ext)) {
        				$ruta = move_uploaded_file($attachtmp, "$dir/$attachname");
        				
        				$tipo_plato = "$dir/$attachname";
        				
        			
        				
        				
        			} else {
        				
        				echo "Esto no es una imagen ";
        			}
        		}
        	}
        }
        
        $estado2 = substr("$estado",0,1);
        
        $PlatoCollectorObj->updateplato($id_plato,$descripcion,$precio,$estado,$tipo_plato);
        echo "<p>EL Plato  SE MODIFICO EXITOSAMENTE</p>";
        ?>   
    
       
        
        <a href="readplato.php"><button>VOLVER</button></a>
       
  
    </body>
</html>