<?php



require 'connect.inc.php';





function update_count(){

		$query = "SELECT `count` FROM `hits_count`";
		
		
		if($query_run = mysql_query($query))
		{

		$count = mysql_result($query_run, 0,'count');

		$count_inc = $count + 1;


		$query_update = "UPDATE `hits_count` SET `count`='$count_inc'";

		$query_update_run = mysql_query($query_update);

		}

}


update_count();


?>