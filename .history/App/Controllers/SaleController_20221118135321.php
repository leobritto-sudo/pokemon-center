<?php

namespace App\Controllers;

use MF\Controller\Action;

class SaleController extends Action {

	public function index() {
        session_start();

		$this->render('index', 'layout-sale');
	}
}


?>