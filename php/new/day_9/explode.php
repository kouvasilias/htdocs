<?php




$filename = 'names.txt';

$handle = fopen($filename, 'r');


echo $datain = fread($handle, filesize($filename));


$names_array = explode(',', $datain);

echo "<br>";

$count = 1;
foreach ($names_array as $name) {

echo "<strong>{$count}.</strong>"."&nbsp".$name."<br>";

$count++;

}

?>