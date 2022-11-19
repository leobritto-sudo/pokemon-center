<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index',
			'page' => null
		);

		$routes['register'] = array(
			'route' => '/register',
			'controller' => 'indexController',
			'action' => 'register',
			'page' => null
		);

		$routes['auth'] = array(
			'route' => '/auth',
			'controller' => 'authController',
			'action' => 'auth',
			'page' => null
		);

		$routes['logout'] = array(
			'route' => '/logout',
			'controller' => 'authController',
			'action' => 'logout',
			'page' => null
		);

		$routes['dashboard'] = array(
			'route' => '/dashboard',
			'controller' => 'dashboardController',
			'action' => 'index',
			'page' => null
		);

		$routes['manager'] = array(
			'route' => '/manager',
			'controller' => 'managerController',
			'action' => 'manager',
			'page' => null
		);

		$routes['product-consult'] = array(
			'route' => '/product-consult',
			'controller' => 'managerController',
			'action' => 'productConsult',
			'page' => 'product'
		);

		$this->setRoutes($routes);
	}

}

?>