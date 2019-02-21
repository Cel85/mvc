<?php

class App {

	protected $controller = 'home';
	protected $method = 'index';
	protected $params = [];

	public function __construct(){
		$url = $this->parseUrl();

		//gledamo postoji li controler s dohvaćenim imenom
		if(file_exists('../app/controllers/'. $url[0]. '.php')){
			$this->controller = $url[0];
			unset($url[0]);//removes from array
		}
		require_once '../app/controllers/'.$this->controller.'.php';
		$this->controller = new $this->controller;

		if(isset($url[1])){
			//gledamo postoji li ta metoda
			if(method_exists($this->controller, $url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}
		}
		$this->params = $url ? array_values($url) : [];
		call_user_func([$this->controller, $this->method], $this->params);
	}

	public function parseUrl(){
		if(isset($_GET['url'])){
			//dohvaćamo url dijelove, trimamo, priopremamo...
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}