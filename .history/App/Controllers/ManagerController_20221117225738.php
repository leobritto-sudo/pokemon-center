<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class ManagerController extends Action {

    public function index() {
		session_start();

		if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {

            $prod = Container::getModel("Produto");
            $emp = Container::getModel("Funcionario");
            $coach = Container::getModel("Treinador");

            $count_prod = count($prod->list());
            $count_emp = count($emp->list());
            $count_coach = count($coach->list());

            $this->view->count_prod = $count_prod;
            $this->view->count_emp = $count_emp;
            $this->view->count_coach = $count_coach;

			$this->render('manager', "layout-manager");
        }
        else {
            header("Location: /");
        }
	}

    public function productConsult() {
        session_start();

        if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {

            $prod = Container::getModel("Produto");
            $prod_list = $prod->list();
            $this->view->prod_list = $prod_list;

            $categ = Container::getModel("Categoria");
            $category_list = $categ->list();
            $this->view->category_list = $category_list;

			$this->render('product-consult', "layout-manager");
        }
        else {
            header("Location: /");
        }
    }

    public function productCreate() {
        session_start();

        if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {

            $categ = Container::getModel("Categoria");
            $category_list = $categ->list();
            $this->view->category_list = $category_list;

			$this->render('product-create', "layout-manager");
        }
        else {
            header("Location: /");
        }
    }

    public function addProduct() {
        session_start();
        
        $prod = Container::getModel("Produto");

        $prod->__set("nome", $_POST["nome"]);
        $prod->__set("estoque", $_POST["estoque"]);
        $prod->__set("preco", $_POST["preco"]);
        $prod->__set("id_categ", $_POST["categoria"]);
        $prod->create();

        return true;
    }

    public function editProduct() {
        session_start();
        
        $prod = Container::getModel("Produto");

        $prod->__set("id_prod", $_POST["id"]);
        $prod->__set("nome", $_POST["nome"]);
        $prod->__set("preco", $_POST["preco"]);
        $prod->__set("estoque", $_POST["estoque"]);
        $prod->__set("id_categ", $_POST["categ"]);
        $prod->edit();

        return true;
    }

    public function deleteProduct() {
        session_start();
        
        $prod = Container::getModel("Produto");

        $prod->__set("id_prod", $_POST["id"]);
        $prod->delete();

        return true;
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

    public function editCategory() {
        session_start();
        
        $categ = Container::getModel("Categoria");

        $categ->__set("id_categ", $_POST["id"]);
        $categ->__set("nome", $_POST["nome"]);
        $categ->edit();

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

            $emp = Container::getModel("Funcionario");
            $emp_list = $emp->list();
            $this->view->emp_list = $emp_list;

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

    public function addEmployee() {
        session_start();
        
        $emp = Container::getModel("Funcionario");

        $emp->__set("nome", $_POST["nome"]);
        $emp->__set("funcao", $_POST["funcao"]);
        $emp->__set("nivel_acesso", $_POST["acesso"]);
        $emp->__set("login", $_POST["login"]);
        $emp->__set("senha", $_POST["senha"]);
        $emp->create();

        return true;
    }

    public function editEmployee() {
        session_start();
        
        $emp = Container::getModel("Funcionario");

        $emp->__set("id_func", $_POST["id"]);
        $emp->__set("nome", $_POST["nome"]);
        $emp->__set("funcao", $_POST["funcao"]);
        $emp->__set("nivel_acesso", $_POST["acesso"]);
        $emp->__set("login", $_POST["login"]);
        $emp->__set("senha", $_POST["senha"]);
        $emp->edit();

        return true;
    }

    public function deleteEmployee() {
        session_start();
        
        $emp = Container::getModel("Funcionario");

        $emp->__set("id_func", $_POST["id"]);
        $emp->delete();

        return true;
    }

    public function coachConsult() {
        session_start();

        if($_SESSION["id"] != "" && $_SESSION["nome"] != "") {
            $coach = Container::getModel("Treinador");
            $coach_list = $coach->list();
            $this->view->coach_list = $coach_list;

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

    public function addCoach() {
        session_start();
        
        $coach = Container::getModel("Treinador");

        $coach->__set("nome", $_POST["nome"]);
        $coach->__set("data_nasc", $_POST["data_nasc"]);
        $coach->__set("telefone", $_POST["telefone"]);
        $coach->__set("email", $_POST["email"]);
        $coach->create();

        return true;
    }

    public function editCoach() {
        session_start();
        
        $coach = Container::getModel("Treinador");

        $coach->__set("id_treinador", $_POST["id"]);
        $coach->__set("nome", $_POST["nome"]);
        $coach->__set("data_nasc", $_POST["data_nasc"]);
        $coach->__set("telefone", $_POST["telefone"]);
        $coach->__set("email", $_POST["email"]);
        $coach->edit();

        return true;
    }

    public function deleteCoach() {
        session_start();
        
        $coach = Container::getModel("Treinador");

        $coach->__set("id_treinador", $_POST["id"]);
        $coach->delete();

        return true;
    }
}


?>