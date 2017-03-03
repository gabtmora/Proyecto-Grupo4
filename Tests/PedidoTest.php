<?php

include_once(__DIR__.'/../pages/modelo/pedido/Pedido.php');

class PedidoTest extends PHPUnit_Framework_TestCase
{

   var $pedido ;

    public function setUp()
    {
	    $this->pedido = new Pedido(1,1,"",new DateTime(),"A");

	    $this->pedido->setId_pedido(8);
	    $this->pedido->setFecha('A');

    }

    public function tearDown()
    {
        unset($this->pedido);
    }

    public function testPedido()
    {
	$this->assertEquals(1,preg_match('/^[0-9]/',$this->pedido->getId_pedido()) );
    }

    public function testFecha()
    {
	$this->assertNotSame($this->pedido->getFecha(),new DateTime() );
    }


}

?>
