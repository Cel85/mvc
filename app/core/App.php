<?php

class App {

	protected $controller = 'home';
	protected $method = 'index';
	protected $params = [];

	public function __construct(){
		echo "radi<br />";
		echo "parsam url: <br />";
		$this->parseUrl();

	}

	public function parseUrl(){
		if(isset($_GET['url'])){
			echo $_GET['url'];
		}
	}
}