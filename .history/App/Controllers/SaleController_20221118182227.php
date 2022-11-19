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

		date_default_timezone_set('Australia/Melbourne');
		$date = date('d-m-Y h:i:s');
		echo $date;
        
        $sale = Container::getModel("Venda");
        $sale->__set("total", $_POST["total"]);
        $sale->__set("data_venda", $date);
        $sale->create();

        return true;
    }
}


?>