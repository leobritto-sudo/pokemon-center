<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class SaleController extends Action {

	public function index() {
        session_start();

		if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {

            $prod = Container::getModel("Produto");
            $list_prod = $prod->list("");
            $this->view->list_prod = $list_prod;

			$this->render('index', 'layout-sale');
        }
        else {
            header("Location: /");
        }
	}

	public function createSale() {
        session_start();
        
        $prod = Container::getModel("Venda");

        $prod->__set("nome", $_POST["nome"]);

        $prod->create();

        return true;
    }
}


?>