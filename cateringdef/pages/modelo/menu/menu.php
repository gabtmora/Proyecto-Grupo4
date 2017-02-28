<?php

class menu
{
	private $orden;
	private $nombre;
	private $estado;
	private $tipo_menu;


	
	 
	function __construct($orden, $nombre, $estado, $tipo_menu) {
		$this->orden = $orden;
		$this->nombre = $nombre;
		$this->estado = $estado;
		$this->tipo_menu = $tipo_menu;
		
	}

	function setId_orden($orden){
		$this->orden = $orden;
	}
	function getorden(){
		return $this->orden;
	}
	function setnombre($nombre){
		$this->nombre = $nombre;
	}
	function getnombre(){
		return $this->nombre;
	}

	function setestado($estado){
		$this->estado = $estado;
	}
	function getestado(){
		return $this->estado;
	}

	function settipo_menu($tipo_menu){
		$this->tipo_menu = $tipo_menu;
	}
	function gettipo_menu(){
		return $this->tipo_menu;
	}

	
}

?>