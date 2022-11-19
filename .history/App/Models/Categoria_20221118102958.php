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
        $query = "SELECT * FROM categoria WHERE nome LIKE '%Recov%'";
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

    // EDIT
    public function edit() {
        $query = "UPDATE categoria SET nome = :nome WHERE id_categ = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $this->__get("id_categ"));
        $stmt->bindValue(":nome", $this->__get("nome"));
        $stmt->execute();

        return $this;
    }

    // DELETE
    public function delete() {
        $query = "DELETE FROM categoria WHERE id_categ = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $this->__get("id_categ"));
        $stmt->execute();

        return $this;
    }
}

?>