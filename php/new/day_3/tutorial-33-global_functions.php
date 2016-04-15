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

php{

	color:red;
}

</style>


<body>

<h1>tutorial-32-global functions</h1>
<br>
<p>

function



</p>


<form method='POST'>
<input type='text' name='text'>
<input type='submit' name='sub' value='sub'>
</form>


</body>

</html>


<?php



$user_ip = $_SERVER['REMOTE_ADDR'];


function echo_ip(){
	global $user_ip;
	$string = 'Your ip is: '.$user_ip;
	echo $string;
}

echo_ip();
?>








