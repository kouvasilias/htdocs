<?php



session_start();



	if($_SESSION['logged_in'] == true)
	{

		die("you're logged in");
	}


	else 
	{

		check_if_logged_in();
	}



?> 


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>

 <form action='' method="POST">
 	
	Password: <input type="password" name='pass'>
	<input type='submit' name='sub' value="login">
	
	<br>
	<br>
	<br>
	<input type='submit' name='logout' value="logout">

 </form>
 	
 </body>
 </html>





 <?php 





	function check_if_logged_in()
	{

		//checking if form has been submitted
		if(isset($_POST['pass']))
		{

			//variables and correct password
			$pass = htmlentities($_POST['pass']);
			$password= '123';

			//checking for empty or not password

			if(!empty($_POST['pass']))
			{

					//checking for the correct password
					if($pass===$password)
					{
					
					$_SESSION['logged_in']=true;
					echo "logged in successfully";
					}
					else {
						echo "wrong pass";
					}


			}

			else {

				echo 'plz type a password';
			}


		}


	}




 ?>

