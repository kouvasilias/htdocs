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

<h1>tutorial-32-functions with return value</h1>
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



function add($num1,$num2)
{

 $result= $num1 + $num2;
 return $result;


}



function divide($num1,$num2){

$result = $num1 / $num2;
return $result;

}



$sum = divide(add(2,2),add(2,2));

echo $sum;

?>








