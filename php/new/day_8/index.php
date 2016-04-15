<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>file handling</title>
	<style type='text/css'>


	#red{

		color:red;
		font-weight: bold;
	}


	</style>
</head>
<body>

<form method="POST">

<input type="text" name='txt' autofocus="autofocus">
<input type='submit' name='sub' value="submit" >
</form>
	
</body>
</html>




<?php





	if(isset($_POST['txt']))
	{

	
		$txt = $_POST['txt'];


			if(!empty($txt)){

			$file = file('names.txt');

			if(empty($file))
			{

				
				$handle1 = fopen('names.txt', 'a');
				$name1 = fwrite($handle1, $txt);
				// fclose($handle1);

			}
			else
			{

			$handle = fopen('names.txt', 'a');

			$name = fwrite($handle, "\n".$txt);
			// fclose($handle);

			echo "name submitted<br>";
			echo "submitted names: <br> ";
			$lines = file('names.txt');
			

			foreach ($lines as $line_num => $line) {
			
			// echo "Line #<b>{$line_num}</b> : " . $line . "<br />\n";

			$line_num = $line_num + 1;
			if(preg_match_all('/elias/', $line))
			{

				echo "Line #<b>{$line_num}</b> : " ."<span id='red'>" .$line ."</span>"."<br />\n";
			}
			else
			{
				echo "Line #<b>{$line_num}</b> : " . $line . "<br />\n";

			}

			}

			}

			}

			
			else {
				echo 'plz type sth';
			}


	}









?>