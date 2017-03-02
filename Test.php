<?php
include_once('/home/travis/build/gabtmora/Proyecto-Grupo4/pages/modelo/Plato/platoCollector.php');

class Test extends PHPUnit_Framework_TestCase
{
  public function testOnePlusOne() {
    $this->assertEquals(1+1,2);
    }
    
    public function testOnePlusOne2() {
    	
    	$DemoCollectorObj = new platoCollector();
    	$this->assertEquals($menuCollectorObj->showmenus(),array());
    }
    
    
}
?>
