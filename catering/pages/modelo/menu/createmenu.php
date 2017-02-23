<?php
session_start();
?>
<?php
include_once("menuCollector.php");
$usuario = $_SESSION['torres'];
$id =1;

include_once("../usuario/UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();

$DemoCollectorObj = new menuCollector();


?>

<?php
    $rol = $_GET['rol'];
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
    <a href="../index.html"><h2>REGISTRO DE MENUS</h2></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Ingrese datos del menu</p>

    <form action="savemenu.php" method="post">
      <div class="form-group has-feedback">
        <input  name="orden" class="form-control" placeholder="orden">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input  name="nombre" class="form-control" placeholder="nombre">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
        <input type="text" name ="tipo_menu"  placeholder="tipo de menu">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
       <div class="checkbox icheck">
            <label>
              <input name ="estado" value="true" type="radio"> Activo
              <input name ="estado" value="false" type="radio"> Desactivo
            </label>
          </div>
          
  
        <div class="form-group has-feedback">
        
        </div>
   
        
      <div class="row">
        <div class="col-xs-8">
       
        </div>
        <!-- /.col -->
        <div >
                      
             <td width="148"><div align="center">
          <input type="submit" value="Guardar" class="btn btn-primary btn-block btn-flat" />
        </div></td>
           
           
        </div>
        <!-- /.col -->
      </div>
    </form>

    

  </div>
  <!-- /.form-box -->
</div>
</body>
</html>
