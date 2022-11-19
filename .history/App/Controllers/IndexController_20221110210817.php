<?php

namespace App\Controllers;

use App\Models\Categoria;
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {

		$this->render('index');
	}

	public function register() {
		print_r($_POST);

		$categ = Container::getModel("Categoria");

		$categ->__set("nome", $_POST["nome"]);
	}

}


?>