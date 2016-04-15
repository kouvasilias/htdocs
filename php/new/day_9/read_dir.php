<?php



$directory = 'files';


// $ha = fopen('file.txt', 'w');
// fwrite($ha, '1,2,3');

if($handle = opendir($directory.'/')){

	echo "looking inside directory:: <strong style='color:red''>".$directory."</strong>";
	echo "<br>";
}



while ($file = readdir($handle)) {
	
	if($file!='.'&&$file!='..')
{
	

	// echo "<a href='{$directory}/$file'>{$file}</a><br>";

		
	$file = substr($file, )
	echo "<a href='".$directory."/".$file."'>$file</a><br>";

}
}

?> 