<?php

namespace App\Models;

use MF\Model\Model;

class Funcionario extends Model {

    private $id_func;
    private $nome;
    private $funcao;
    private $nivel_acesso;
    private $login;
    private $senha;

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    // LIST
    public function list() {
        $query = "SELECT *, c.nome AS nome_categ, p.nome AS nome_prod FROM produto AS p LEFT JOIN categoria AS c ON p.id_categ = c.id_categ ";
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

    // AUTH
    public function auth() {
        $query = "SELECT * FROM funcionario WHERE login = :login AND senha = :senha";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":login", $this->__get("login"));
        $stmt->bindValue(":senha", $this->__get("senha"));
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        if(!empty($user["id_func"])) {
            $this->__set("id_func", $user["id_func"]);
            $this->__set("nome", $user["nome"]);
            $this->__set("funcao", $user["funcao"]);
            $this->__set("nivel_acesso", $user["nivel_acesso"]);
        }

        return $this;
    }
}

?>