<?php

namespace App\Models;

use MF\Model\Model;

class Venda extends Model {

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

        $query = "SELECT * FROM venda";
        $stmt = $this->db->query($query);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // CREATE
    public function create() {
        $query = "INSERT INTO venda (nome) VALUES (:nome)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome", $this->__get("nome"));
        $stmt->execute();

        return $this;
    }
}

?>