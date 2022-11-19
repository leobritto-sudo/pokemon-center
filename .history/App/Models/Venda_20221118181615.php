<?php

namespace App\Models;

use MF\Model\Model;

class Venda extends Model {

    private $total;
    private $data_venda;

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
        $query = "INSERT INTO venda (total, data_venda) VALUES (:total, :data_venda)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":total", $this->__get("total"));
        $stmt->bindValue(":total", "now()");
        $stmt->execute();

        return $this;
    }
}

?>