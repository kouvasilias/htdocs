<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>appending a file</title>
</head>



		<body>
			
			<form method="POST">
			
			<input type='text' name='name'>

			<input type="submit" value="submit" name='sub'>


			</form>
			
		</body>


</html>


<?php


	

	






		if (isset($_POST['name']))
		{

			$name = $_POST['name'];

					if(!empty($name)){


				$handle = fopen('names.txt', 'a');

				fwrite($handle, "\n".$name );

				fclose($handle);

				}

			else {

				echo 'plz time sth';
				}

		}	




?>