<?php
session_start();
?>
<?php
include_once("UsuarioCollector.php");
$usuario = $_SESSION['torres'];
$id =1;

$DemoCollectorObj = new UsuarioCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Usuario </title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
          
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../index.html"><h2>REGISTRO DE USUARIOS</h2></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Ingrese sus Datos</p>

    <form action="saveUsuario.php" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="usuario" class="form-control" placeholder="Usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="clave" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
  
        <div class="form-group has-feedback">
        
        </div>
        
    
        
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Aceptar <a href="#">terminos</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="https://www.facebook.com/" target="_blank" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Ingreso usando Facebook</a>
      <a href="https://plus.google.com/collections/featured" target="_blank" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Ingresar usando Google++</a>
    </div>

    <a href="login.html" class="text-center">Ya estoy registrado</a>
  </div>
  <!-- /.form-box -->
</div>
</body>
</html>
