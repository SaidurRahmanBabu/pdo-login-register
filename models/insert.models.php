<?php
require 'Database.php';

// class Register / insert data
class Register extends Database {
	public function reg_data($fname, $sname, $mbloremail, $password, $dob, $gender)
	{
		$sql = "INSERT INTO reg_user(fname, sname, mbloremail, password, dob, gender) VALUES(:fname, :sname, :mbloremail, :password, :dob, :gender)";

		$stmt = $this->conn->prepare($sql);
		$bind = array(
			'fname' 			=> $fname,
			'sname' 			=> $sname,
			'mbloremail' 	=> $mbloremail,
			'password' 		=> $password,
			'dob' 				=> $dob,
			'gender' 			=> $gender
		);

		$stmt->execute($bind);
		return true;
	}
}
