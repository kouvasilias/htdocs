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

<h1>tutorial-21-comparison_operators</h1>
<br>
<p>

if($num1!=1) for using the not equal sign
<br>
if($num1>=10) for checking if $num1 is greater or equal
<br>
if($num1==10) for checking if $num1 equal to 10

<br>

$password = 'password';
<br>
if($password=='password'){
	<br>
	echo 'correct';
	<br>
}
<br>
else{
	<br>
	echo 'incorrect';
	<br>
}
<br>

</p>
<form action='tutorial-21-comparison_operators.php' method='POST'>
<input type='text' name='num1'>
<input type='submit' name='sub'>
</form>

</body>

</html>

<?php

if (isset($_POST['num1']))
{



$num=$_POST['num1'];
$sub=$_POST['sub'];

// if ($num!=1){

// echo "num1 is not 1";

// }

// else
// {

// 	echo "num1 is 1";

// }


if ($num>=10)
{

	echo 'num1 is greater or eq to 10';
}

}




?>






