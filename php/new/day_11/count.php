<?php



$users_ip = $_SERVER['REMOTE_ADDR'];


function hit_count(){


	$ip_file = file('ip.txt');

	foreach ($ip_file as $line_num => $ip) {

		$line_num = $line_num +1;
		echo "<strong>".$line_num.") "."</strong>". $ip."<br>";


	}


}

?>