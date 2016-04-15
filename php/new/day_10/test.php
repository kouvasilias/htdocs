<?php



//limiting file name character legth
$location = 'uploads/';


if($handle = opendir($location)){

	echo "reading directory: $location <br><br>";

}


while ($file = readdir($handle)) {

	if($file!='.'&&$file!='..'){

		if(strlen($file)>=20){

	$file = substr($file, 0,10);
	echo "$file <br>";
	

 } else{

 	echo "$file <br>";
 }

}
}




?>