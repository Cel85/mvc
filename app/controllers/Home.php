<?php

class Home extends Controller {

	public function index($name='', $other=''){
		echo $name[0] . " " .$other;
	}

}