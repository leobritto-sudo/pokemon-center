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

            $coach = Container::getModel("Treinador");
            $list_coach = $coach->list("");
            $this->view->list_coach = $list_coach;

			$this->render('index', 'layout-sale');
        }
        else {
            header("Location: /");
        }
	}

	public function createSale() {
        session_start();

		date_default_timezone_set('America/Sao_Paulo');
		$date = date('Y-m-d h:i:s');
        
        $sale = Container::getModel("Venda");
        $sale->__set("total", $_POST["total"]);
        $sale->__set("data_venda", $date);
        $sale->__set("quantidade", $_POST["quantidade"]);
        $sale->create();

        return true;
    }

    public function historySale() {
        session_start();

		if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {

            $coach = Container::getModel("Treinador");
            $list_coach = $coach->list("");
            $this->view->list_coach = $list_coach;

			$this->render('index', 'layout-sale');
        }
        else {
            header("Location: /");
        }
	}
}


?>