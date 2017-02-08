<?php
session_start();
?>
<?php
include_once("../Demo_collecctor/DemoCollector.php");
include_once("../Demo_collecctor/menu_item_Collector.php");

include_once("../Demo_collecctor/menu_item_Collector.php");


$DemoCollectorObj1 = new menu_item_Collector() ;
$DemoCollectorObj = new DemoCollector();

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

<!--<!-- header -->
<div class="header">
<div class="container">
<div class="header-nav">
<nav class="navbar navbar-default">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.html"><i class="glyphicon glyphicon-cutlery" aria-hidden="true"></i><span>C</span>atering</a>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">

</ul>
</div><!-- /navbar-collapse -->
</nav>
</div>
</div>
</div>
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
