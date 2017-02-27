<?php
session_start();
?>
<?php
include_once("platoCollector.php");

$usuario = $_SESSION['torres'];
$id_plato = $_GET['id_plato'];
$descripcion = $_GET['descripcion'];
$precio = $_GET['precio'];
$bandera =$_GET['estado'];
$tipo_plato = $_GET['tipo_plato'];
$estado2 ="";
$estado3 ="";
$estado4 ="";
$estado ="";

echo  $_GET['estado'];

if( $bandera=="true" ) {

	$estado2 ="checked";
	$estado = "True";
	

}
else 


{

	$estado3 ="checked";
	$estado4 = "True";
	

}
echo 
$bandera;


$MenuCollectorObj = new platoCollector();



?>

<DOCTYPE html>
<html lang ="es">
<head>
    <meta charset="utf-8">
	<title>Usuario</title>
    <link rel="stylesheet" href="../../../css/estilotabla.css">
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../css/style2.css">
</head>
<body>
    <header>
        <h1>Login</h1>
        <div class="usuario">
        <?php
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
            echo "<a href='read_mineral.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
     

     
    <div  >
                <h1>MODIFICACION DE PLATOS </h1>
                <form class='form-horizontal' method="post" action="save_updatePlato.php" enctype="multipart/form-data" >
                      <?php
                      
                  
                        echo "<label >indentificacion de plato</label>";
                         echo "<input type='text' name='id_plato' value='".  $id_plato ."' readonly>";
                         
                         echo "<br>";
                          
                        echo "<label >descripcion</label>";

                        echo "<input type='text' name='descripcion' value='".  $descripcion ."' >";

                        echo "<br>";

                        echo "<label >precio </label>";
                   
                    
                        echo "<input type='text' name='precio' value='". $precio."'>";

                        echo "<br>";
                        
                 
                        
                       /*  echo " <div class='checkbox icheck'>
                        <label>
    		              		             
    		        
    		             
                        <input name ='estado' value='".$bandera."'checked = '".$estado2."' type='radio'> Activo
                        <input name ='estado' value='".$bandera."' 'checked = '".$estado3."' type='radio'> Desactivo
                        </label>
                        </div>"; */
                        
                        echo "<br>";
                        echo "<div class='form-group'>
                        <label >Estado</label>
                        <div class='col-sm-10'>
                        <select class='form-control select2' style='width: 100%;' name='estado'>
                        <option selected='selected'>Activo</option>
                        <option>Inactivo</option>
                        </select>
                        </div>
                        </div>";
                        
                        
                        

                        echo "<br>";
                        echo "<input type='file' name='imagen' id='picture' class='form-control'>";
                    ?>
                    <br><br>
                    <?php
                    echo "<button type='submit'>Modificar</button>";
                    ?>
                </form>
            </div>
    </div>
    
    </body>
</html>
