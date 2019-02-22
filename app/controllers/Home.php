<?php

class Home extends Controller {

	public function index($name = ''){
		$user = $this->model('user');
		$user->name = $name[0];

		$this->view('home/index', ['name' => $user->name]);

	}

}