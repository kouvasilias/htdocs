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

in a do while loop the condition is tested AFTER executing the statements within the loop.
<br>
This means that the do while loop would execute its statements at least once, even if the condition is false the first time


</p>


</body>

</html>


<?php 

$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x<=5);


?>








