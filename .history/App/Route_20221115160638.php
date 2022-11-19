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

		$routes['auth'] = array(
			'route' => '/auth',
			'controller' => 'authController',
			'action' => 'auth'
		);

		$routes['logout'] = array(
			'route' => '/logout',
			'controller' => 'authController',
			'action' => 'logout'
		);

		$routes['dashboard'] = array(
			'route' => '/dashboard',
			'controller' => 'dashboardController',
			'action' => 'index'
		);

		$routes['manager'] = array(
			'route' => '/manager',
			'controller' => 'dashboardController',
			'action' => 'manager'
		);

		$routes['product-consult'] = array(
			'route' => '/product-consult',
			'controller' => 'dashboardController',
			'action' => 'consult'
		);

		$this->setRoutes($routes);
	}

}

?>