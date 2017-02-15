<?php
session_start();
?>
<?php
include_once("../Demo_collecctor/DemoCollector.php");
include_once("../Demo_collecctor/menu_item_Collector.php");

include_once("../Demo_collecctor/ClienteCollector.php");


$DemoCollectorObj1 = new menu_item_Collector() ;
$DemoCollectorObj = new DemoCollector();
$DemoCollectorClienteObj = new ClienteCollector();

?>

<html>
<head>


<title>CATERING | Contáctenos</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pasta Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="../js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	<title>Usuario</title>
    <link rel="stylesheet" href="estilo.css">
          
</head>

<body>



 <div id="menu"> 
<?php 
foreach ($DemoCollectorObj1->showmenu() as $c){
	
	echo ' <ul> <li><a href="'.$c->getId() .'">'.$c->get_nombre().'</a>';
	echo '<div><ul>';
	foreach ($DemoCollectorObj1->showmenuitem($c->getId()) as $s){
	
		
		echo '<li><a href="'.$s->get_nombre_item().'.php">'.$s->get_nombre_item().'</a></li>';
		echo '</ul></div>';
	}
	echo '</li></ul>';
	
}

?> 

    </div> 
    
<!-- //header --> 
    <header>
        <h1>Administrador</h1>
        <div class="usuario">
        <?php
	    echo "<p>Hola" . $_SESSION['torres'] . "</p>";
		    
        ?>
        </div>
     </header>
    
    
    <h1>USUARIO</h1>
    <a href="cliente_save.php"><button>Nuevo</button></a>

    <table>
        <tr>    
            <th>cliente</th>
            <th>RUC</th>
            <th>razon_social</th>
            <th>tipo_cliente</th>
            <th>direccion</th>
            <th>telefono</th>
            <th>Estado</th>
        </tr>
        <?php
            foreach ($DemoCollectorClienteObj->showDemos() as $c){
              echo "<tr>";
              echo "<td>" . $c->getIdcliente() . "</td>";
              echo "<td>" . $c->getRUC() . "</td>";                       
	          echo "<td>" . $c->getrazon_social() . "</td>";   
	          echo "<td>" . $c->getipo_cliente() . "</td>";
	          echo "<td>" . $c->getdireccion() . "</td>";
	          echo "<td>" . $c->getelefono() . "</td>";
	          echo "<td>" . $c->getEstado() . "</td>";
           
              echo "<td><a href='update_Demo.php'><button>Editar</button></a></td>";
	          echo "<td><a href='delete_cliente.php?id_cliente=". $c->getIdcliente() ."'><button>Eliminar</button></a></td>";
              echo "</tr>"; 
                
        }
  	    echo "<a href='logout.php'><button>SALIR</button></a>";

        ?>

    </table>

   
 
</body>
</html>

