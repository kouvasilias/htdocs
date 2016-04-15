<?php



require 'conf.inc.php';

//checking every ip stored in our array
//they could be stored in a database too

foreach ($ip_blocked as $ip) {
	

//checking

	if($ip==$ip_address){

		die('your ip '.$ip_address.' has been blocked');

	}

}





?>