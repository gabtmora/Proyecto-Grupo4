<?php
session_start();
?>
<?php
$rol = $_GET['rol'];

include_once("menuCollector.php");
$menuCollectorObj = new menuCollector();

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
	    echo "<p>Hola " . $_SESSION['torres'] . "</p>";
		    
        ?>
        </div>
     </header>
    
    
    <h1>Menus</h1>
    <?php
        echo "<a href='createmenu.php?rol=$rol'><button>CREAR</button></a>";
    ?>
    <table class="rwd-table">
        <tr>    
            <th>ID</th>
            <th>Nombre</th>
            <th>estado</th>      
            
        </tr>
  
        <?php
            foreach ($menuCollectorObj->showmenus() as $c){
            echo "<tr>";
            echo "<td>" . $c->getId() . "</td>";                      
            echo "<td>" . $c->getnombre() . "</td>";   
            echo "<td>" . $c->getestado() . "</td>"; 
            echo "<td><a href='updatemenu.php?ID=". $c->getId() ." & rol=$rol & descripcion=". $c->getnombre() ." & estado=". $c->getestado() . " '><button>Editar</button></a></td>";    
            echo "<td><a href='deletemenu.php?ID=". $c->getId() ." & rol=$rol'><button>Eliminar</button></a></td>";
            echo "</tr>";      
        }
  	     echo "<a href='../../admin.php?rol=$rol'><button>SALIR</button></a>";
        ?>
        
    </table>
</body>
</html>

