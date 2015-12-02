<?php

/**
* Config Database : Azmi Hundsome
*/
class Config
{
	
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $db   = "db_ikkeh";

	public $conn;

	function getConnection(){
		$this->conn = null;

		try {
			$this->conn = new PDO("mysql:host=". $this->host .";dbname=". $this->db, $this->user, $this->pass);
		} catch (PDOException $exception) {
		 	echo "Connection error: " . $exception->getMessage();
		}

		return $this->conn;
	}
	
}

?>