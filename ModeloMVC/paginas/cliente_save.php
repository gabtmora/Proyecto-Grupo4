<?php
session_start();

include_once("../Demo_collecctor/DemoCollector.php");
include_once("../Demo_collecctor/menu_item_Collector.php");
include_once("../Demo_collecctor/ClienteCollector.php");


$DemoCollectorObj1       = new menu_item_Collector() ;
$DemoCollectorClienteObj = new ClienteCollector();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
    
   <form action="guardar_cliente.php" method="get">
  <input type = "hidden" name = "editar" id = "editar" value = "1" />
  <input type = "hidden" name = "codigo" id = "codigo" value = "<?=$_GET['id']; ?>" />
  <table width="523" border="0" cellpadding="2" cellspacing="0">
  
   
    <tr>
      <td><div align="right">RUC</div></td>
      <td colspan="2"><input name="ruc" type="text" id="ruc" size="10"  /></td>
    </tr>
    <tr>
      <td><div align="right">Razon_social</div></td>
      <td colspan="2"><input name="razon_social" type="text" id="" size="20" /></td>
    </tr>
    <tr>
      <td><div align="right">tipo_cliente</div></td>
      <td colspan="2"><input name="tipo_cliente" type="text" id="tipo_cliente" size="40"  /></td>
    </tr>
   <tr>
      <td><div align="right">direccion</div></td>
      <td colspan="2"><input name="direccion" type="text" id="direccion" size="40"  /></td>
    </tr>
 
   <tr>
      <td><div align="right">telefono</div></td>
      <td colspan="2"><input name="telefono" type="text" id="telefono" size="40"  /></td>
    </tr>
      <tr>
      <td><div align="right">estado</div></td>
      <td colspan="2"><input name="estado" type="text" id="estado" size="40"  /></td>
    </tr>
  
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="148"><div align="center">
          <input type="submit" value="Guardar" />
        </div></td>
      <td width="191"><div align="center">
          <input type="button" value="Cancelar" onClick="javascript:history.back(1);" />
        </div></td>
    </tr>
  </table>
</form>
 
       
  
    </body>
</html>