<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class DashboardController extends Action {

	public function index() {

		session_start();

		if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
			$this->render('index', "layout-dashboard");
        }
        else {
            header("Location: /");
        }
	}

    public function manager() {
		session_start();

		if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
			$this->render('manager', "layout-manager");
        }
        else {
            header("Location: /");
        }
	}

    public function consult() {
        session_start();

        if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
			$this->render('manager', "layout-manager");
        }
        else {
            header("Location: /");
        }
    }
}


?>