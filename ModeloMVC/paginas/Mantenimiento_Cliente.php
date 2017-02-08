<?php
  session_start();
?>

<?php
include_once("../Demo_collecctor/menu_item_Collector.php");
#$usuario = $_SESSION['usuario'];



$DemoCollectorObj = new menu_item_Collector() ;

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
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
</head>

<body>
<!-- header -->
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
<!-- //header -->

 <div id="menu"> 
<?php 
foreach ($DemoCollectorObj->showmenu() as $c){
	
	echo ' <ul> <li><a href="'.$c->getId() .'">'.$c->get_nombre().'</a>';
	echo '<div><ul>';
	foreach ($DemoCollectorObj->showmenuitem($c->getId()) as $s){
	
		
		echo '<li><a href="'.$s->get_nombre_item().'.php">'.$s->get_nombre_item().'</a></li>';
		echo '</ul></div>';
	}
	echo '</li></ul>';
	
}

?> 

    </div> 
    
    
    <!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="contact-main">
				<h3>Bienvenido Usuario </h3>
				
			</div>
		</div>
	</div>



<!--- footer --->
<footer class="piedepagina p-y-1" role="contentinfo">
<div class="container">
<p>2016 © Catering Todos los derechos reservados</p>
<ul class="redes-sociales">
<li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"> </i>  </a></li>
<li><a href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
<li><a href="https://plus.google.com/collections/featured"><i class="fa fa-google++" aria-hidden="true"></i> </a></li>
</ul>

</div>

</footer>
<!--- //footer --->
<!-- for bootstrap working -->

<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>