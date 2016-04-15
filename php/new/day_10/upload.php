
<?php
	

	



	// $location = $_SESSION['location'] = 'uploads/';
	$location = 'uploads/';

	if(isset($_FILES['file']['name'])){

	
	$name=$_FILES['file']['name'];

	$tmp_name = $_FILES['file']['tmp_name'];


			if(!empty($name))
			{

			$location = 'uploads/';
			


			if(file_exists($location.$name))
			{

				echo "file already exists";

			}
			else
			{
				if(move_uploaded_file($tmp_name, $location.$name))
				{

					echo "file successfully uploaded";

					echo substr($name, strpos($name, '.') +1);

				}
				else
				{
					echo "error";
				}
			}

			}
			else{

				echo 'please choose a file.';
			}


	}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	
	body{
	background-color: #f0f0f0;
	font-family: menlo;
	float: center;
	background-image: url('uploads/Untitled-1.jpg');

	}


	a{

	color:blue;
	text-decoration: none;
	font-weight: bold;
	font-family: courier;
	}
	h1{

	margin:0;
	padding:0;
	font-family:menlo;
	/*color:#33CCFF;*/
	color:white;

	}

	hr.style14 { 
	  border: 0; 
	  height: 2px; 
	  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
	  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
	  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
	  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
	}
	
	#uploader{

		color:white;
		display: inline;
		
			}

	

	


	</style>
</head>


		<body>
		<!-- <div> -->
		<h1>
		<a id='uploader' href='upload.php'>uploader</a>
		</h1>

		<!-- <form action='login.php' method="POST">
		<input type='text' name="pass">
		<input type='submit' value="login" name='sub'>
		</form>
		</div>  -->
		<hr class='style14'>

		<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name='file'>
		<input type="submit" value="submit">
		</form>
	    
		</body>


</html>


<?php






if($handle = opendir($location.'/')){

echo "looking inside: <strong style='color:red'>{$location}</strong><br>";
echo "<br>";
echo "<strong style='color:red'>Files: </strong><br>";

}

while($file = readdir($handle)){

if($file!='.'&&$file!='..'){

	
	echo "<a href='".$location.$file."'>$file</a>&nbsp;| <a style='color:red' href='delete.php?file=$file'>delete</a><br>";
	

}

}







?>


