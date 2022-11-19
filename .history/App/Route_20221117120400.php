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

		$routes['product-create'] = array(
			'route' => '/product-create',
			'controller' => 'managerController',
			'action' => 'productCreate'
		);

		$routes['add-product'] = array(
			'route' => '/add-product',
			'controller' => 'managerController',
			'action' => 'addProduct'
		);

		$routes['edit-product'] = array(
			'route' => '/edit-product',
			'controller' => 'managerController',
			'action' => 'editProduct'
		);

		$routes['delete-product'] = array(
			'route' => '/delete-product',
			'controller' => 'managerController',
			'action' => 'deleteProduct'
		);

		$routes['category-consult'] = array(
			'route' => '/category-consult',
			'controller' => 'managerController',
			'action' => 'categoryConsult'
		);

		$routes['category-create'] = array(
			'route' => '/category-create',
			'controller' => 'managerController',
			'action' => 'categoryCreate'
		);

		$routes['add-category'] = array(
			'route' => '/add-category',
			'controller' => 'managerController',
			'action' => 'addCategory'
		);

		$routes['delete-category'] = array(
			'route' => '/delete-category',
			'controller' => 'managerController',
			'action' => 'deleteCategory'
		);

		$routes['edit-category'] = array(
			'route' => '/edit-category',
			'controller' => 'managerController',
			'action' => 'editCategory'
		);

		$routes['employee-consult'] = array(
			'route' => '/employee-consult',
			'controller' => 'managerController',
			'action' => 'employeeConsult'
		);

		$routes['employee-create'] = array(
			'route' => '/employee-create',
			'controller' => 'managerController',
			'action' => 'employeeCreate'
		);

		$routes['add-employee'] = array(
			'route' => '/add-employee',
			'controller' => 'managerController',
			'action' => 'addEmployee'
		);

		$routes['coach-consult'] = array(
			'route' => '/coach-consult',
			'controller' => 'managerController',
			'action' => 'coachConsult'
		);

		$routes['coach-create'] = array(
			'route' => '/coach-create',
			'controller' => 'managerController',
			'action' => 'coachCreate'
		);

		$this->setRoutes($routes);
	}

}

?>