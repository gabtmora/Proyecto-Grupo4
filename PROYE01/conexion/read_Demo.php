<?php
session_start();
?>
<?php
include_once("DemoCollector.php");
$usuario = $_SESSION['usuario'];
$id =2;

$DemoCollectorObj = new DemoCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Usuario</title>
    <link rel="stylesheet" href="estilo.css">
          
</head>
<body>
    <header>
        <h1>Administrador</h1>
        <div class="usuario">
        <?php
	    echo "<p>Hola" . $_SESSION['torres'] . "</p>";
		    
        ?>
        </div>
     </header>
    
    
    <h1>USUARIO</h1>
    <a href="create_Demo.php"><button>CREAR</button></a>

    <table>
        <tr>    
            <th>Id_usuario</th>
            <th>Id_persona</th>
            <th>Usuario</th>
            <th>Clave</th>
            <th>Fecha_registro</th>
            <th>Estado</th>
        </tr>
        <?php
            foreach ($DemoCollectorObj->showDemos() as $c){
            echo "<tr>";
            echo "<td>" . $c->getId_usuario() . "</td>";
            echo "<td>" . $c->getId_persona() . "</td>";                       
	    echo "<td>" . $c->getUsuario() . "</td>";   
	    echo "<td>" . $c->getClave() . "</td>";
	    echo "<td>" . $c->getFecha_registro() . "</td>";
	    echo "<td>" . $c->getEstado() . "</td>";
           
            echo "<td><a href='update_Demo.php'><button>Editar</button></a></td>";
	    echo "<td><a href='delete_Demo.php?ID=". $c->getId_usuario() ."'><button>Eliminar</button></a></td>";

            echo "</tr>"; 
                
        }
  	    echo "<a href='logout.php'><button>SALIR</button></a>";

        ?>

    </table>

   
 
</body>
</html>
