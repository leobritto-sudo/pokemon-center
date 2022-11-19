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
    public function list($search) {
        if ($search != "") {
            $search = "WHERE nome LIKE '%{$search}%'";
        }

        $query = "SELECT * FROM treinador {$search}";
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
        $query = "UPDATE treinador SET nome = :nome, data_nasc = :data_nasc, telefone = :telefone, email = :email WHERE id_treinador = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $this->__get("id_treinador"));
        $stmt->bindValue(":nome", $this->__get("nome"));
        $stmt->bindValue(":data_nasc", $this->__get("data_nasc"));
        $stmt->bindValue(":telefone", $this->__get("telefone"));
        $stmt->bindValue(":email", $this->__get("email"));
        $stmt->execute();

        return $this;
    }

    // DELETE
    public function delete() {
        $query = "DELETE FROM treinador WHERE id_treinador = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $this->__get("id_treinador"));
        $stmt->execute();

        return $this;
    }
}

?>