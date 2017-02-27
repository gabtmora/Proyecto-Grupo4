<?php
session_start();
?>
<?php

include_once("detalleCollector.php");
$usuario = $_SESSION['torres'];
 $id_detalle = $_GET['id_detalle'];
 $id_plato = $_GET['id_plato'];
 $id_pedido = $_GET['id_pedido'];
 $cantidad = $_GET['cantidad'];
 $precio = $_GET['precio'];
 $total = $_GET['total']; 

 

$DemoCollectorObj = new detalleCollector;
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
            echo "<a href='admin.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
    <div class="contLogin">
                <h1>MODIFICANDO USUARIO</h1>
                <form class="form-horizontal" method="post" action="save_updatepedido.php">
                      <?php
                        echo "<label >id_detalle</label>";

                        echo "<input type='text' name='id_detalle' value='". $id_detalle ."' readonly>";

                        echo "<br>";

                        echo "<label >id_plato </label>";
                   
                    
                        echo "<input type='text' name='id_plato' value='". $id_plato."'readonly>";

                        echo "<br>";
                        
                        echo "<label >id_pedido  </label>";
                         
                        
                        echo "<input type='text' name='id_pedido' value='". $id_pedido ."'readonly>";
                        
                        echo "<br>";
                        
                        echo "<label >cantidad  </label>";
                         
                        
                        echo "<input type='text' name='cantidad' value='". $cantidad ."'>";
                        
                        echo "<br>";
                        

                        echo "<label >precio  </label>";
                         
                        
                        echo "<input type='text' name='precio' value='". $precio ."'>";
                        
                        echo "<br>";
                        
                        
                        echo "<label >total  </label>";
                        echo "<input type='text' name='total' value='". $total ."'>";
                        
                        echo "<br>";
                        
                       
        		
        		       
                    ?>
                    <br><br>
                    <?php
                    echo "<a href='save_update_mineral.php?id_mineral=". $id_detalle ."'><button type='submit'>Modificar</button></a>";
                    ?>
                </form>
            </div>
    </div>
    
    </body>
</html>
