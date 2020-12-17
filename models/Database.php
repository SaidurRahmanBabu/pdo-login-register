<?php 
include_once '../config.php';

// connect to the database
class Database {
	private $db_host 			= DB_HOST;
	private $db_user 			= DB_USER;
	private $db_name 			= DB_NAME;
	private $db_password 	= DB_PASSWORD;

	private $dsn;
	public $conn;

	public function __construct()
	{
		try {
			$this->dsn = "mysql:host={$this->db_host};dbname={$this->db_name}";
			$this->conn = new PDO($this->dsn, $this->db_user, $this->db_password);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}