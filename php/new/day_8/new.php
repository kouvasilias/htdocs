<?php


THIS APPLICATION WILL GIVE YOU THE SOURCE CODE OF A WEBSITE IN A FILE NY LINE SYSTEM

// Get a file into an array.  In this example we'll go through HTTP to get
// the HTML source of a URL.
$lines = file('http://www.mendaxsite.freeiz.com');

// Loop through our array, show HTML source as HTML source; and line numbers too.
foreach ($lines as $line_num => $line) {
    echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}

// Another example, let's get a web page into a string.  See also file_get_contents().
$html = implode('', file('http://www.example.com/'));

// Using the optional flags parameter since PHP 5
$trimmed = file('somefile.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);






$array = array('ilias','john','elias','new');


foreach ($array as $num => $names) {
	
	$num= $num +1;

	echo "$num: $names <br>";
}



?>


