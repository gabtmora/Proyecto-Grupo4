<?php
session_start();
?>
<?php
include_once("UsuarioCollector.php");
$usuario = $_SESSION['torres'];

$id_usuario = $_GET['ID'];
$usuario = $_GET['usuario'];
$clave = $_GET['clave'];

$UsuarioCollectorObj = new UsuarioCollector();

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
                <form class="form-horizontal" method="post" action="save_updateUsuario.php">
                      <?php
                        echo "<label >Id_Usuario</label>";

                        echo "<input type='text' name='id_usuario' value='". $id_usuario ."' readonly>";

                        echo "<br>";

                        echo "<label >Usuario </label>";
                   
                    
                        echo "<input type='text' name='usuario' value='". $usuario ."'>";

                        echo "<br>";

                        echo "<label>Password &nbsp;&nbsp;&nbsp;</label>";
                        echo "<input type='text' value='". $clave ."' name='clave'>"
                    ?>
                    <br><br>
                    <?php
                    echo "<a href='save_update_mineral.php?id_mineral=". $id_usuario ."'><button type='submit'>Modificar</button></a>";
                    ?>
                </form>
            </div>
    </div>
    
    </body>
</html>