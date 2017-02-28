<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ingreso</title>
        <link href="style2.css" rel="stylesheet">
    	
    
    </head>
    <body>
        <header>
    	   <h1>Ingreso exitoso</h1>
            <div class="usuario">
	<?php
		$usuario = $_GET['usuario'];
		$clave = $_GET['clave'];

		
		$_SESSION['torres']= $usuario;
		if (isset($_SESSION['torres'])){
	       
            echo "<p>Hola usuario <span class='nmbUser'>" . $usuario . "<span> </p>";
        }
    ?>
            <a href='logout.php'><button>Salir</button></a>
            </div>
           
        </header>
        <a class="btnDatos" href='read_Demo.php'><button>Datos</button></a>
    </body>
</html>
