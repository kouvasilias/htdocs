<?php





if(isset($_GET['file'])){

	$file = $_GET['file'];

	if(unlink('uploads/'.$file))
	{
		
		echo "file <strong style='color:red'>$file</strong> has been deleted...";
	
			

		// header( "refresh:5;url=wherever.php" );

		header('refresh:1;url=upload.php');

		// header("location:upload.php");

	}
	else
	{
		echo "file cannot be deleted";
	}
}




?>