<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$host = "localhost";
			$db_name = "db_pokemon";
			$user = "root";
			$pass = "root";

			$conn = new \PDO(
				"mysql:host={$host};dbname={$db_name};charset=utf8",
				$user,
				$pass 
			);

			return $conn;

		} catch (\PDOException $e) {
			//.. tratar de alguma forma ..//
		}
	}
}

?>