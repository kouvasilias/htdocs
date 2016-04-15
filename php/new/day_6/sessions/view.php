<?php

//you don't have to include set.php

session_start();



// echo $_SESSION['logged_in'];


if($_SESSION['logged_in'] == true)
{
 
 echo "you're logged in";

}


else if($_SESSION['logged_in'] == false) {

	echo 'not logged in';
}






?>


