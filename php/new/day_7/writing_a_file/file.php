<?php



//w for writing, r for reading, a for appending


$handle = fopen ('names.txt', 'w');

$ar=array('elias','alex','billy');


foreach ($ar as $name ) {

	

	fwrite($handle, $name."\n");

}





?>