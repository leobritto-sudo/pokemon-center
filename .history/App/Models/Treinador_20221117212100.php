<?php

namespace App\Models;

use MF\Model\Model;

class Treinador extends Model {

    private $id_treinador;
    private $nome;
    private $data_nasc;
    private $telefone;
    private $email;

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    // LIST
    public function list() {
        $query = "SELECT * FROM treinador";
        $stmt = $this->db->query($query);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // CREATE
    public function create() {
        $query = "INSERT INTO treinador (nome, data_nasc, telefone, email) VALUES (:nome, :data_nasc, :telefone, :email)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome", $this->__get("nome"));
        $stmt->bindValue(":data_nasc", $this->__get("data_nasc"));
        $stmt->bindValue(":telefone", $this->__get("telefone"));
        $stmt->bindValue(":email", $this->__get("email"));
        $stmt->execute();

        return $this;
    }

    // EDIT
    public function edit() {
        $query = "UPDATE produto SET nome = :nome, preco = :preco, estoque = :estoque, id_categ = :id_categ WHERE id_prod = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $this->__get("id_prod"));
        $stmt->bindValue(":nome", $this->__get("nome"));
        $stmt->bindValue(":preco", $this->__get("preco"));
        $stmt->bindValue(":estoque", $this->__get("estoque"));
        $stmt->bindValue(":id_categ", $this->__get("id_categ"));
        $stmt->execute();

        return $this;
    }

    // DELETE
    public function delete() {
        $query = "DELETE FROM produto WHERE id_prod = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $this->__get("id_prod"));
        $stmt->execute();

        return $this;
    }
}

?>