<?php



$xml = simplexml_load_file('example.xml');





// echo $xml -> producer[1] -> name.' is '.$xml->producer[1]->age;

foreach ($xml->producer as $producer) {
	

	echo "<strong>".$producer->name.' is '.$producer->age."</strong>";
	echo "<br>";

	foreach ($producer->show as $show) {
		
		echo "  -".$show->showname.' on '.$show->showdate.'<br>'; 
	}


}



?>