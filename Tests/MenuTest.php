<?php

include_once(__DIR__.'/../pages/modelo/menu/menu.php');
class MenuTest extends PHPUnit_Framework_TestCase
{

   var $menu;

    public function setUp()
    {
	    $this->menu = new menu(1,"","A","");

	    $this->menu->setnombre("mi menu");
	    $this->menu->settipo_menu("tipo");
	    

    }

    public function tearDown()
    {
        unset($this->menu);
    }

    //No se deben permitir números en el nombre del menú
    public function testNombreDeMenu()
    {
	   $this->assertEquals(0,preg_match('/[0-9]/',$this->menu->getnombre() ));
    }

    //No se deben permeitir números en el tipo de menú
    public function testTipoMenu()
    {
	   $this->assertEquals(0,preg_match('/[0-9]/',$this->menu->gettipo_menu() ));
    }


}

?>