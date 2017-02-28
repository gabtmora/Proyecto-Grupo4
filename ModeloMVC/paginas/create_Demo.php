<?php
session_start();
?>
<?php
include_once("DemoCollector.php");
$usuario = $_SESSION['usuario'];
$id =1;

$DemoCollectorObj = new DemoCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Usuario </title>
    <link rel="stylesheet" href="estilo.css">
          
</head>
<body>
    <header>
        <h1>Login</h1>
        </div>
     </header>
    <div class="contLogin">
                <h1>CREAR USUARIO</h1>

                <form class="login" method="post" action="save_Demo.php">

                    <label >Id Usuario</label>
                    <input type="serial" name="id_usuario" placeholder="Id">
                    <br>
                    <label>Id Persona </label>
                    <input type="serial" name="id_persona" placeholder="Id">
		    <br>
		    <label>Usuario </label>
                    <input type="character" name="usuario" placeholder="Usuario">
		    <br>
		    <label>Clave </label>
                    <input type="character" name="clave" placeholder="Clave">
		    <br>
		    <label>Fecha de Registro </label>
                    <input type="date" name="fecha_registro" placeholder="Fecha de Registro">
		    <br>
		    <label>Estado</label>
                    <input type="checkbox" name="estado" placeholder="Estado">

                    <br><br>
                    <button type="submit">Crear</button>

                </form>
            </div>
    </body>
</html>
