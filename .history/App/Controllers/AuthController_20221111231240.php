<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class AuthController extends Action {

	public function auth() {

		$funcionario = Container::getModel("Funcionario");

        $funcionario->__set("login", $_POST["login"]);
        $funcionario->__set("senha", $_POST["password"]);

        $funcionario->auth();

        if($funcionario->__get("id_func") != "" && $funcionario->__get("nome") != "") {
            session_start();

            $_SESSION["id"] = $funcionario->__get("id_func");
            $_SESSION["nome"] = $funcionario->__get("nome");
            $_SESSION["nivel_acesso"] = $funcionario->__get("nivel_acesso");
        }
        else {
            header("Location: /?login=erro");
        }
	}

    
}


?>