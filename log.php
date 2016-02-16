<?php
session_start();

/*if(isset($_POST['log']))
{
	$log = $_POST['log'];
}*/
		
	$username = $_POST['username'];
	$password = $_POST['password'];


	$auth = login($username,$password);

	if($auth == "1")
	{
		$_SESSION['authentic'] = true;
		header('Location: mainAdmin.php');
		return;
	}
	else if($auth == "0")
	{
		header('Location: loguser.php?message=not logged');
		return;
	}
	else
		header('Location: www.google.ca');
/*
else if($log == 'out')
{
	session_destroy();
	header('Location: index.php?message=loggedout');
	return;
}
else
{
	header('Location: index.php');
	return;
}*/

	
	function login($us,$pa)
	{
		$rValue = null;
		$user="tymj3660";
		$password="mkirch";
		$database="tymj3660";


		$mysqli = new mysqli("localhost", $user, $password, $database);

		/* check connection */
		if ($mysqli->connect_errno) {
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}

			
		/* Select queries return a resultset */
			if($result = $mysqli->query("select count(*) from USERS where username='$us' AND password='$pa'"))
			{

				while($obj = $result->fetch_array())
				{
					$rValue = $obj[0];
					print_r($obj);
				}
			}
			


			/* free result set */
			$result->close();
			
			$mysqli->close();
			
			return $rValue;
		}
?>
