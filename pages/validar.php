<?php
session_start();
?>
<?php
require('modelo/usuario/Usuario.php');
require('UsuarioCollector.php');
    $usuarioCollector = new UsuarioCollector();
		$email = $_POST['usuario'];
		$clave = $_POST['password'];
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <?php
    
        $usuario = $usuarioCollector->validarUsuario($email,$clave);
        if ($usuarioCollector->validarUsuario($email,$clave)){
            $_SESSION['torres']= $email;
            $rol = $usuarioCollector->consultarRol($email);
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=admin.php?rol=$rol'>";
        }
        if (!isset($_SESSION['torres'])){
   ?>
             $mensaje = "EL USUARIO NO SE ENCUENTRA REGISTRADO----";
            print "<script>alert('$mensaje')</script>";
            <meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=login.php'>
<?php
        }
	   ?>
            
    </head>
    <body>
	
    </body>
</html>
