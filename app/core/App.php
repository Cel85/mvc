<?php

class App {

	protected $controller = 'home';
	protected $method = 'index';
	protected $params = [];

	public function __construct(){
		echo "parsam url: <br />";
		$this->parseUrl();

	}

	public function parseUrl(){
		if(isset($_GET['url'])){
			var_dump( $_GET['url']);die();
			echo $_GET['url'];
		}
	}
}