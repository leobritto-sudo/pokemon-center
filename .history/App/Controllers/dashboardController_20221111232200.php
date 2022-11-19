<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class DashboardController extends Action {

	public function index() {

		if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {

            session_start();
			$this->render('index');
        }
        else {
            header("Location: /");
        }
	}

    
}


?>