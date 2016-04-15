<html>

<style type='text/css'>


body{

background-color: grey;

}

h1{

color:white;

}

p{
	color:#00ff30;
	font-size: 16px;
	font-weight: bold;
	letter-spacing: 2px;	
	display:block;
}


</style>


<body>

<h1>tutorial-29-die_&_exit_functions/h1>
<br>
<p>

The die() function prints a message and exits the current script.
<br>
<br>
This function is an alias of the exit() function.
<br>
<br>
using @ infront of the code will not produce an error message if the code is wrong
<br>
<br>



</p>


<form method='POST'>
<input type='text' name='text'>
<input type='submit' name='sub' value='sub'>
</form>


</body>

</html>


<?php


if (isset($_POST['text']))
{

$txt=$_POST['text'];
$sub=$_POST['sub'];

if($sub){


switch($txt){

case 1:
echo 'one';
break;

case 2:
echo 'two';
break;

case 3:
echo 'three';
break;

default:
die ("error!");
break;
}

}
}


echo "<br> <p>or use die(); or exit(); for connecting into a datebase</p>";

@mysql_connect('localhost','root','') or die('could not connect');

echo 'connected';

?>








