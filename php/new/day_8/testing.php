<?php




// $name = true;

// if($name == true)
// {


// 	$bool = true;
// 	echo "true";
// }

// else {

// 	echo "false";
// }



// echo $bool;
// 




$names = file('names.txt');
$count = 1;

foreach ($names as $name){

	echo $count.") ".$name."<br>";
	$count ++;
}


?>


