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

<h1>tutorial-38-Arrays</h1>
<br>
<p>

Arrays



</p>


<form method='POST'>
<input type='text' name='text'>
<input type='submit' name='sub' value='sub'>
</form>


</body>

</html>


<?php



$places = array('athens','london','paris');

foreach($places as $elements)
{

	echo $elements."<br>";
}


?>








