<?php



class Main extends Controller{	

	function __construct(){
		parent::__construct();
		$this->view->render('main/index');

		
		
	}

	function saludo(){
		echo "Ejecutaste el metodo saludo";
	}
}

?>