<?php

namespace App\Controllers;

use App\Models\Categoria;
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {

		$this->view->login = isset($_GET["login"]) ? $_GET["login"] : "";
		$this->render('index');
	}

	public function register() {
		print_r($_POST);

		$categ = Container::getModel("Categoria");

		$categ->__set("nome", $_POST["nome"]);

		$categ->create();
	}

}


?>