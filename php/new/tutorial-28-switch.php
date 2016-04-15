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
}


</style>


<body>

<h1>tutorial-24-do_while_loop</h1>
<br>
<p>

The switch statement is used to perform different actions based on different conditions.
Use the switch statement to select one of many blocks of code to be executed.



</p>


<form method='POST'>
<input type='text' name='number'>
<input type='submit' name='sub' value='number'>
</form>


<form method='POST'>
<input type='text' name='day'>
<input type='submit' name='subm' value='day'>
</form>

</body>

</html>


<?php


if (isset($_POST['number']))
{

$number=$_POST['number'];
$sub=$_POST['sub'];

if($sub){


switch($number){

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
echo 'number not found';
break;
}

}
}



if (isset($_POST['day']))
{

$day=$_POST['day'];
$subm=$_POST['subm'];

if($subm){


switch($day){

case 'saturday':
case 'sunday':
echo 'it\'s a weekend';
break;

default:
echo 'it\'s not a weekend';
break;



}

}
}



?>








