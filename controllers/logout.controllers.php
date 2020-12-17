<?php
session_start();
if(isset($_POST['logout']) && $_POST['logout'] == "logout")
{
	session_destroy();
	echo "http://localhost/pdologinregister/index.php";
}