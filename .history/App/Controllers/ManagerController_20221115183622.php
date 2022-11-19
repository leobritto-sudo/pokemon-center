<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class ManagerController extends Action {

    public function index() {
		session_start();

		if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
			$this->render('manager', "layout-manager");
        }
        else {
            header("Location: /");
        }
	}

    public function productConsult() {
        session_start();

        if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
			$this->render('product-consult', "layout-manager");
        }
        else {
            header("Location: /");
        }
    }

    public function productCreate() {
        session_start();

        if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
			$this->render('product-create', "layout-manager");
        }
        else {
            header("Location: /");
        }
    }

    public function categoryConsult() {
        session_start();

        if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
			$this->render('category-consult', "layout-manager");
        }
        else {
            header("Location: /");
        }
    }

    public function categoryCreate() {
        session_start();

        if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
			$this->render('category-create', "layout-manager");
        }
        else {
            header("Location: /");
        }
    }

    public function employeeConsult() {
        session_start();

        if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
			$this->render('employee-consult', "layout-manager");
        }
        else {
            header("Location: /");
        }
    }

    public function coachConsult() {
        session_start();

        if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
			$this->render('coach-consult', "layout-manager");
        }
        else {
            header("Location: /");
        }
    }
}


?>