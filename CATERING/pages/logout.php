<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ingreso</title>
        <link href="estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
	<h1>LOGOUT</h1>
	<?php

        if (isset($_SESSION['torres'])){
                session_destroy();
                echo "Se ha destruido la sesion";
                echo "<br><a href='login.php'><button>Volver<button></a>";
        }else{
               
                echo "<a href='login.php'><button>Volver<button></a>";

        }

	?>

    </body>
</html>

