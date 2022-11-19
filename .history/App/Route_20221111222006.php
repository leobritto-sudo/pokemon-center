<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['register'] = array(
			'route' => '/register',
			'controller' => 'indexController',
			'action' => 'register'
		);

		$routes['dashboard'] = array(
			'route' => '/dashboard',
			'controller' => 'dashboardController',
			'action' => 'index'
		);

		$this->setRoutes($routes);
	}

}

?>