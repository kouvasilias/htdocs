<?php




//we've got 2 tables
//1st is people (id,name)
//2nd is pets(id,people_id,pet_name)
//we wanna match people_id with people's name
//so that we can see who has which pet


mysql_connect('localhost','elias','123') or die(mysql_error());

mysql_select_db('elias');


$query= "SELECT `people`.`name` , `pets`.`pet_name` FROM `people` JOIN `pets`
ON `people`.`id`=`pets`.`people_id` WHERE `people_id` COUNT(*)>=2";




if($query_run=mysql_query($query)){

	$query_num_rows = mysql_num_rows($query_run);
	



		while($rows=mysql_fetch_array($query_run)){


			$owner = $rows['name'];
			$pet = $rows['pet_name'];


			// echo "$owner has a $pet <br>";

		
			
		}

	


}



?>