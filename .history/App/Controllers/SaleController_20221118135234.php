<?php

namespace App\Controllers;

use MF\Controller\Action;

class SaleController extends Action {

	public function index() {

		$this->render('index', 'layout-sale');
	}
}


?>