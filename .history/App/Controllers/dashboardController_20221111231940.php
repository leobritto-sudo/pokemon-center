<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class DashboardController extends Action {

	public function index() {

		session_start();
		$this->render('index');
	}

    
}


?>