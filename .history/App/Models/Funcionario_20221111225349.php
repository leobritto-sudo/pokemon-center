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

    // CREATE
    public function create() {
        $query = "INSERT INTO categoria (nome) VALUES (:nome)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome", $this->__get("nome"));
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

        if(!empty($user["id"])) {
            $this->__set("id_func", $user["id"]);
            $this->__set("nome", $user["nome"]);
            $this->__set("funcao", $user["funcao"]);
            $this->__set("nivel_acesso", $user["nivel_acesso"]);
        }

        return $this;
    }
}

?>