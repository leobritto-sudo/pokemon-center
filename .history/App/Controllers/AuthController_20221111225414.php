<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class AuthController extends Action {

	public function auth() {

		$funcionario = Container::getModel("Funcionario");

        $funcionario->__set("login", $_POST["login"]);
        $funcionario->__set("senha", $_POST["password"]);

        $return = $funcionario->auth();

        if($funcionario->__get("id_func") != "" && $funcionario->__get("nome") != "") {
            echo "Autenticado";
        }
        else {
            "Erro na autenticação";
        }
	}

    
}


?>