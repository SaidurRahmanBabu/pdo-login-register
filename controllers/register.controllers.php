<?php
require '../models/insert.models.php';
$reg = new Register;

if(isset($_POST['action']) && $_POST['action'] == 'register')
{
	$fname 			= $_POST['fname'];
	$sname 			= $_POST['sname'];
	$mbloremail = $_POST['mbloremail'];
	$password		= $_POST['password'];
	$dob 				= $_POST['date'] . '-' . $_POST['month'] . '-' . $_POST['year'];
	$gender 		= $_POST['inlineRadioOptions'];

	if(!empty($fname) && !empty($sname) && !empty($mbloremail) && !empty($password) && !empty($dob) && !empty($gender))
	{
		try {
			$reg->reg_data($fname, $sname, $mbloremail, $password, $dob, $gender);
			echo "Successfully Registered!";
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
		}
	}
}