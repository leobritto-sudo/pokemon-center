<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$host = "localhost";
			$db_name = "mvc";
			$user = "root";
			$pass = "";

			$conn = new \PDO(
				"mysql:host={$host};dbname={$db_name};charset=utf8",
				$username,
				$pass 
			);

			return $conn;

		} catch (\PDOException $e) {
			//.. tratar de alguma forma ..//
		}
	}
}

?>