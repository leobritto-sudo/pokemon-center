<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class SaleController extends Action {

	public function index() {

		$this->render('index', 'layout-sale');
	}
}


?>