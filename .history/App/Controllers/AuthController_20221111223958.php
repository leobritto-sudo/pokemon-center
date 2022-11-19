<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class dashboardController extends Action {

	public function auth() {

		$funcionario = Container::getModel("Funcionario");

        $funcionario->__set("login", $_POST["login"]);
        $funcionario->__set("senha", $_POST["password"]);

        $return = $funcionario->auth();

        echo "<pre>";
        print_r($return);
        echo "</pre>";
	}

    
}


?>