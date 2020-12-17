<?php
	session_start();
	// require select.models.php
	require_once '../models/select.models.php';
	$select_db = new FetchData;

	if(isset($_POST['action']) && $_POST['action'] == 'login')
	{
		$emailorphone = $_POST['emailorphone'];
		$password 		= $_POST['password'];

		$result = $select_db->select($emailorphone, $password);

		if($result)
		{
			$user_name = $result->fname;
			$_SESSION['user_name'] = $user_name;
		}
		else
		{
			echo "Email / Phone and Password did not mathc!";
		}		

	}