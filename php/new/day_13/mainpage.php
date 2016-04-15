<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

	<b>Please choose user status:</b>
	<form method='GET'>

	<select name='online'>
	<option value='y'>Online</option>
	<option value='n'>Offline</option>
	</select>

	<br>
	<br>
	<input type='submit' value="submit">
	<br>
	<br>

	</form>


</body>
</html>



<?php




require 'connect.inc.php';



if(isset($_GET['online'])&&!empty($_GET['online'])){

	$online = $_GET['online'];

	if($online=='y'||$online=='n'){


	$query = "SELECT `id`,`username`,`password` FROM `users` WHERE `online`='".$online."'";

	if($query_run = mysql_query($query)){

	echo "<strong>ONLINE USERS :</strong><br>";

	while($row = mysql_fetch_assoc($query_run)){

		$user = $row['username'];
		echo "$user<br>";

	}

	}

	else{

		mysql_error();
	}
	}



}










?>