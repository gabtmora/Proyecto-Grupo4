<?php
	session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Acceso a Usuario</title>
        <link href="estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
	   
	<?php
		if (isset($_SESSION['torres'])){
			echo "<p>El usuario " . $_SESSION['torres'] . " se ha logeado</p>";
        	        echo "<a href='logout.php'><button>Cerrar Sesion</button></a>";
		}else{
		?>
            <div class="contLogin">
                <h1>INICIAR SESIÓN</h1>
                <form class="login" method="get" action="login.php">
                    <label >Usuario </label>
                    <input type="text" name="usuario" placeholder="Introduce tu usuario">

                    <br>

                    <label>Clave &nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="clave" placeholder="Contraseña">

                    <br><br>
                    <button type="submit">Enviar</button>

                </form>
            </div>
		<?php
			}
		?>
    </body>
</html>
