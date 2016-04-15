<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action='index.php' method="POST">
	<input type='text' name='username'>
	<input type='password' name='password'>
	<input type='submit' name='sub' value='login'>
	</form>
</body>
</html>


<?php


mysql_connect('localhost','elias','123');

mysql_select_db('elias');

if(isset($_POST['username'])&&isset($_POST['password']))
{

	$username = htmlentities(mysql_real_escape_string($_POST['username']));
	 $password = htmlentities(mysql_real_escape_string($_POST['password']));

	// $username = htmlentities($_POST['username']);
	// $password = htmlentities($_POST['password']);

	if(!empty($username)&&!empty($password))
	{

		$password_hash = md5($password);

		$query = "SELECT `id` FROM `users` WHERE `username`='$username' AND `password`='$password_hash'";


		if($query_run = mysql_query($query)){

		$num_rows = mysql_num_rows($query_run);

			if($num_rows==0){


			echo "wrong usernamename and password";


			}
			elseif($num_rows==1)
			{

				echo "OK";

				$user_id = mysql_result($query_run, 0,'id');
				// $retrieved_password = mysql_result($query_run, 0, 'password');

				echo $retrieved_username;
			}

			}

	}
	else{

		echo "please type a username or password";
	}

}








?>