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

<h1>tutorial-38-string functions upper and lower case</h1>
<br>
<p>

string functions upper and lower case



</p>


<form action='tutorial-37-string_functions_upper_lower_case.php' method='GET'>
<input type='text' name='text'>
<input type='submit' name='sub' value='sub'>
</form>


</body>

</html>


<?php



if(isset($_GET['text'])&&!empty($_GET['text']))
{

	echo $name=$_GET['text'];

	// echo $name;

}






?>








