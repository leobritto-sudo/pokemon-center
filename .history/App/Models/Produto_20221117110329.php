<?php

namespace App\Models;

use MF\Model\Model;

class Produto extends Model {

    private $id_prod;
    private $nome;
    private $estoque;
    private $preco;
    private $id_categ;

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    // LIST
    public function list() {
        $query = "SELECT *, c.nome AS nome_categ FROM produto AS p LEFT JOIN categoria AS c ON p.id_categ = c.id_categ ";
        $stmt = $this->db->query($query);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // CREATE
    public function create() {
        $query = "INSERT INTO produto (nome, estoque, preco, id_categ) VALUES (:nome, :estoque, :preco, :id_categ)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome", $this->__get("nome"));
        $stmt->bindValue(":estoque", $this->__get("estoque"));
        $stmt->bindValue(":preco", $this->__get("preco"));
        $stmt->bindValue(":id_categ", $this->__get("id_categ"));
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