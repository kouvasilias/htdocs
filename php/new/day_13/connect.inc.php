<?php




$connect_error = 'could not connect';

$mysql_host = 'localhost';
$mysql_user = 'elias';
$mysql_pass = '123';


$mysql_db = 'elias';


if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db)){
	die($connect_error);
}



?>