<?php




require 'connect.inc.php';


$query = "SELECT `id`, `username`, `password` FROM `users` ORDER BY `id`";




if($query_run = mysql_query($query)){



while($row = mysql_fetch_assoc($query_run)){


$id = $row['id'];
$username = $row['username'];
$password = $row['password'];

echo "user: <span style='color:red'>{$id}</span> <strong>{$username}</strong> with passoword: {$password}<br>";
}




}
else{

	echo mysql_error();
}



?>