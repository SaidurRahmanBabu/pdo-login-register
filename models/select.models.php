<?php
	require 'Database.php';

	class FetchData extends Database {
		public function select($emailorphone, $password)
		{
			$sql = "SELECT * FROM reg_user WHERE mbloremail = :emailorphone AND password = :password";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute(['emailorphone' => $emailorphone, 'password' => $password]);
			$resut = $stmt->fetch(PDO::FETCH_OBJ);
			return $resut;		
		}

		
	}
