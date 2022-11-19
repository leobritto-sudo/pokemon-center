<?php

namespace App\Models;

use MF\Model\Model;

class Categoria extends Model {

    private $id_categ;
    private $nome;

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
}

?>