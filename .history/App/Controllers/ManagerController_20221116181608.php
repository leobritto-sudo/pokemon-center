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
            $category = Container::getModel("Categoria");
            
            $category_list = $category->list();

            $this->view->category_list = $category_list;

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

    public function addCategory() {
        session_start();
        
        $categ = Container::getModel("Categoria");

        $categ->__set("nome", $_POST["nome"]);
        $categ->create();

        return true;
    }

    public function deleteCategory() {
        session_start();
        
        $categ = Container::getModel("Categoria");

        $categ->__set("id_categ", $_POST["id"]);
        $categ->delete();

        return true;
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

    public function employeeCreate() {
        session_start();

        if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
			$this->render('employee-create', "layout-manager");
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

    public function coachCreate() {
        session_start();

        if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
			$this->render('coach-create', "layout-manager");
        }
        else {
            header("Location: /");
        }
    }
}


?>