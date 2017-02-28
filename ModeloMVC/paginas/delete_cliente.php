<?php
session_start();
?>
<?php
include_once("../Demo_collecctor/ClienteCollector.php");
 $id_cliente =$_GET['id_cliente'];

$DemoCollectorClienteObj = new ClienteCollector();

$DemoCollectorClienteObj->eliminarDemos($id_cliente); 
echo "<a href = 'cliente.php'>salir</a>";

 

?>
<a href = "logout.php">salir</a>
