<?php
 class menu  
 {
 	private  $id;
 	private $nombre;
 	private $id_item ;
 	private $nombre_item;
 	private $menu_id;
 	private $cont_item;
 	
 	
 	function __construct($id, $nombre) {
 		$this->id = $id;
 		$this->nombre = $nombre;
 		
 	}
 	
 	
 	function __construct1($id_tem,$nombre_item,$menu_id,$cont_item) {
 	 	$this->id_tem = $id_item;
 		$this->nombre_item = $nombre_item;
 		$this->menu_id = $menu_id;
 		$this->cont_item = $cont_item;
 	
 	}
 	
 	function setId($id){
 		$this->id = $id;
 	}
 	function getId(){
 		return $this->id;
 	}
 	function setId_nombre($nombre){
 		$this->nombre = $nombre;
 	}
 	function get_nombre(){
 		return $this->nombre;
 	}
 	
 	
 	function set_id_item($id_item){
 		$this->id_item = $id_item;
 	}
 	function get_id_item(){
 		return $this->id_item;
 	}
 	
 	function set_nombre_item($nombre_item){
 		$this->nombre_item = $nombre_item;
 	}
 	function get_nombre_item(){
 		return $this->nombre_item;
 	}
 	
 	function set_menu_id($menu_id){
 		$this->menu_id = $menu_id;
 	}
 	function get_menu_id(){
 		return $this->menu_id;
 	}
 	
 	function set_cont_item($cont_item){
 		$this->cont_item = $cont_item;
 	}
 	function get_cont_item(){
 		return $this->cont_item;
 	}
 	
 	
 }
?>
