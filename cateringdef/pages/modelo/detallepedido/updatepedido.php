<?php
session_start();
?>
<?php
include_once("detalleCollector.php");
$usuario = $_SESSION['torres'];
/* $id_detalle = $_GET['id_detalle'];
$id_plato = $_GET['id_plato'];
$id_pedido = $_GET['id_pedido'];
$cantidad = $_GET['cantidad'];
$precio = $_GET['precio'];
$total = $_GET['total']; */


$carrito= $_SESSION['carrito'];


$MenuCollectorObj = new detalleCollector;
?>




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
            echo "<a href='read_mineral.php'><button>Salir</button></a>";
		    
        ?>
        </div>
     </header>
       <table class="rwd-table">
        <tr>    
            <th>Orden</th>
            <th>Nombre</th>
            <th>estado</th>
            <th>tipoMenu</th>
              
            
        </tr>
  
        <?php
        foreach($carrito as $key=>$value){
        
        	//var_dump ($value);
        
        	$id_plato = $value['id_plato'];
        	$nombre = $value['nombre'];
        	$cantidad = $value['cantidad'];
        	$precio = $value['precio'];
        
        	$totalVenta = $value['totalVenta'];
        
            echo "<tr>";
            echo "<td>" . $id_plato . "</td>";                       
	        echo "<td>" . $nombre . "</td>";   
	        echo "<td>" . $cantidad. "</td>";
	        echo "<td>" . $cantidad . "</td>";  
            echo "<td><a href='updatemenu.php?orden=". $c->getorden() ." & nombre=". $c->getnombre() ." & estado=". $c->getestado() . " & tipo_menu=". $c->gettipo_menu(). "'><button>Editar</button></a></td>";    
	        echo "<td><a href='deletemenu.php?orden=". $c->getorden() ."'><button>Eliminar</button></a></td>";

            echo "</tr>"; 
            
         }      
       
  	    echo "<a href='../../logout.php'><button>SALIR</button></a>";

        ?>

    </table>
    
    </body>
</html>