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

    // LIST
    public function list() {
        $query = "SELECT * FROM categoria";
        $stmt = $this->db->query($query);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
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