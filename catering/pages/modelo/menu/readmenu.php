<?php
session_start();
?>
<?php
include_once("menuCollector.php");

$id =2;

$DemoCollectorObj = new menuCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Menu</title>
    <link rel="stylesheet" href="../../../css/estilotabla.css">
          
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
    
    
    <h1>Menus</h1>
    <a href="createmenu.php"><button>CREAR</button></a>

    <table class="rwd-table">
        <tr>    
            <th>Orden</th>
            <th>Nombre</th>
            <th>estado</th>
            <th>tipoMenu</th>
              
            
        </tr>
  
        <?php
            foreach ($DemoCollectorObj->showmenus() as $c){
            echo "<tr>";
            echo "<td>" . $c->getorden() . "</td>";                       
	    echo "<td>" . $c->getnombre() . "</td>";   
	    echo "<td>" . $c->getestado() . "</td>";
	    
	    echo "<td>" . $c->gettipo_menu() . "</td>";  
        echo "<td><a href='updatemenu.php?orden=". $c->getorden() ." & nombre=". $c->getnombre() ." & estado=". $c->getestado() . " & tipo_menu=". $c->gettipo_menu(). "'><button>Editar</button></a></td>";    
	    echo "<td><a href='deletemenu.php?orden=". $c->getorden() ."'><button>Eliminar</button></a></td>";

            echo "</tr>"; 
            
                
        }
  	    echo "<a href='../../logout.php'><button>SALIR</button></a>";

        ?>

    </table>

   
 
</body>
</html>

