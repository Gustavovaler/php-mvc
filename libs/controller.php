<?php

class Controller{

	function __construct(){
		
		$this->view = new View();
	}

	function render($nombre){
		require 'views/'.$nombre . '.php';
		

	}
}


?>