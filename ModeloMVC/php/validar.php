<?php
$connect = pg_connect("host=localhost port=5432 dbname=php user=postgres password=root");

$login      = $_GET['usuario'];
$contrasena = $_GET['password'];

$consulta = pg_query("SELECT* FROM usuario WHERE email='{$login}' AND contrasena='{$contrasena}'");
$total = pg_num_rows($consulta);

if (empty($_GET['login']) && empty($_GET['password'])) {
    echo '<script type="text/javascript">
                     alert("POR FAVOR INGRESO LOS CAMPOS");
                     window.location="../pages/login.html";
        </script>';
}

if ($total == 0) {
    echo '<script type="text/javascript">
                     alert("USUARIO NO REGISTRADO");
                     window.location="../pages/login.html";
        </script>';
}
else {

echo "<p>Su Login o Contraseña son Correctos</p>";
echo "¡USTED SE HA LOGEADO CORRECTAMENTE!";

}
?>
