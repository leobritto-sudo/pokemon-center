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

    // CREATE
    public function create() {
        $query = "INSERT INTO categoria (nome) VALUES (:nome)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome", $this->__get("nome"));
        $stmt->execute();

        return $this;
    }
}

?>