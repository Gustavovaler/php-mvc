<?php

class Errors extends Controller{

	function __construct(){
		parent::__construct();	
		$this->view->mensaje = "Error al cargar el recurso.No existe esa pagina";	
		$this->view->render('error/index');
	}
}



?>