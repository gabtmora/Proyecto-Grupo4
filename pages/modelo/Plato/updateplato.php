<?php
session_start();
?>
<?php
include_once("platoCollector.php");

$usuario = $_SESSION['torres'];
$id_plato = $_GET['id_plato'];
$descripcion = $_GET['descripcion'];
$precio = $_GET['precio'];

$tipo_plato = $_GET['tipo_plato'];
$estado2 ="";
$estado3 ="";

if( $_GET['estado']=1) {

	$estado2 ="checked";
	$estado = "True";

}
else
{

	$estado3 ="checked";
	$estado = "false";

}



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
    
    
    <script type="text/javascript">

</script>
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
     

     
    <div class="contLogin">
                <h1>MODIFICACION DE PLATOS </h1>
                <form class="form-horizontal" method="post" action="save_updatePlato.php" enctype="multipart/form-data" >
                      <?php
                      
                  
                         
                         echo "<input type='text' name='id_plato' value='".  $id_plato ."' readonly>";
                         
                         echo "<br>";
                          
                        echo "<label >descripcion</label>";

                        echo "<input type='text' name='descripcion' value='".  $descripcion ."' >";

                        echo "<br>";

                        echo "<label >precio </label>";
                   
                    
                        echo "<input type='text' name='precio' value='". $precio."'>";

                        echo "<br>";
                        
                 
                        
                        echo " <div class='checkbox icheck'>
                        <label>
    		              		             
    		        
    		             
                        <input name ='estado' value='".$estado."'checked = '".$estado2."' type='radio'> Activo
                        <input name ='estado' value='0' 'checked = '".$estado3."' type='radio'> Desactivo
                        </label>
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
