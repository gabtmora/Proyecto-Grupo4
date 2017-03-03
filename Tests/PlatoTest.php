<?php


include_once(__DIR__.'/../pages/modelo/Plato/plato.php');
class PlatoTest extends PHPUnit_Framework_TestCase
{

   var $platoValido;
    var $platoInvalido;
    public function setUp()
    {
        $this->platoValido = new plato(1,"",0,"I");
        $this->platoInvalido = new plato(1,"",0,"I");
	    $this->platoValido->setprecio(1.0);
	    $this->platoInvalido->setprecio(-1);
        
        $this->platoValido->setdescripcion("Una simple descripcion");
        $this->platoInvalido->setdescripcion("@");
    }

    public function tearDown()
    {
        unset($this->platoValido);
        unset($this->platoInvalido);
    }
    
    public function testpreciosNoNegativos(){
        $this->assertTrue($this->platoValido->getprecio() >0);
        $this->assertTrue($this->platoInvalido->getprecio() <0);
    }
    
    public function testdescripcion(){
        $this->assertEquals(1,preg_match('/\w/',$this->platoValido->getdescripcion()));
        $this->assertEquals(0,preg_match('/\w/',$this->platoInvalido->getdescripcion()));
    }
}