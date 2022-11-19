<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class DashboardController extends Action {

    public function index() {
		session_start();

		if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
			$this->render('manager', "layout-manager");
        }
        else {
            header("Location: /");
        }
	}

    public function productConsult() {
        session_start();

        if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
			$this->render('product-consult', "layout-manager");
        }
        else {
            header("Location: /");
        }
    }

    public function categoryConsult() {
        session_start();

        if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
			$this->render('category-consult', "layout-manager");
        }
        else {
            header("Location: /");
        }
    }
}


?>