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
			'controller' => 'managerController',
			'action' => 'index'
		);

		$routes['product-consult'] = array(
			'route' => '/product-consult',
			'controller' => 'managerController',
			'action' => 'productConsult'
		);

		$routes['category-consult'] = array(
			'route' => '/category-consult',
			'controller' => 'managerController',
			'action' => 'categoryConsult'
		);

		$routes['employee-consult'] = array(
			'route' => '/employee-consult',
			'controller' => 'managerController',
			'action' => 'employeeConsult'
		);

		$routes['coach-consult'] = array(
			'route' => '/coach-consult',
			'controller' => 'managerController',
			'action' => 'coachConsult'
		);

		$routes['category-create'] = array(
			'route' => '/category-create',
			'controller' => 'managerController',
			'action' => 'categoryCreate'
		);

		$this->setRoutes($routes);
	}

}

?>