<?php





require 'connect.inc.php';


$user_ip = $_SERVER['REMOTE_ADDR'];



function exists($ip){

global $user_ip;

$query = "SELECT `ip` FROM `ipz` WHERE `ip`='$user_ip'";

$query_run = mysql_query($query);
$query_num_rows = mysql_num_rows($query_run);

if($query_num_rows==0){

	return false;
}
elseif($query_num_rows>=1){

	return true;
}




}



if(exists($user_ip)){

echo "ip already exists.";
}
elseif(!exists($user_ip)){

echo "ip doesn't exist.";
}






?>