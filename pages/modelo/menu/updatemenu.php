<?php
session_start();
?>
<?php
include_once("menuCollector.php");
$usuario = $_SESSION['torres'];
$orden = $_GET['orden'];
$nombre = $_GET['nombre'];
$estado = $_GET['estado'];
$tipo_menu = $_GET['tipo_menu'];

$MenuCollectorObj = new menuCollector();
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
    <div class="contLogin">
                <h1>MODIFICANDO USUARIO</h1>
                <form class="form-horizontal" method="post" action="save_updateMenu.php">
                      <?php
                        echo "<label >orden</label>";

                        echo "<input type='text' name='orden' value='". $orden ."' readonly>";

                        echo "<br>";

                        echo "<label >nombre </label>";
                   
                    
                        echo "<input type='text' name='nombre' value='". $nombre."'>";

                        echo "<br>";
                        
                        echo "<label >tipo_menu </label>";
                         
                        
                        echo "<input type='text' name='tipo_menu' value='". $tipo_menu ."'>";
                        
                        echo "<br>";
                        
                        echo "<label>estado &nbsp;&nbsp;&nbsp;</label>";
                        echo "<input type='text' value='". $estado ."' name='estado'>"
                    ?>
                    <br><br>
                    <?php
                    echo "<a href='save_update_mineral.php?id_mineral=". $orden ."'><button type='submit'>Modificar</button></a>";
                    ?>
                </form>
            </div>
    </div>
    
    </body>
</html>
