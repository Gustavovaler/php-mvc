<?php

class Controller{

	function __construct(){
		
		$this->view = new View();
	}

	function render($nombre){
		require 'views/'.$nombre . '.php';		

	}

	 function loadModel($model){

	 	$url = 'models/'.$model.'model.php';

	 	if(file_exists($url)){
	 		require $url;

	 		$modelName  = $model.'Model';
	 		$this->model = new $modelName();
	 	}

	 }
}


?>