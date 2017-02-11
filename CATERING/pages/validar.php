<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <?php
		$email = $_POST['usuario'];
		$clave = $_POST['password'];

		
		$_SESSION['torres']= $email;
		if (isset($_SESSION['torres'])){
	      echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=admin.php'>";
   		}
        /*else{
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=admin.php'>";
        }*/
	   ?>
            
    </head>
    <body>
	
    </body>
</html>
