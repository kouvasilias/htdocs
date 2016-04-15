


<?php




include 'header.inc.php';


?>

<html>

	<head>
		<style type='text/css'>

		#h2{

			color:white;
			text-align: center;
			font-size: 2em;

		}

		img{
			max-width: 100%;
			padding-top: 10%;

		}


		#wrapper{

		max-width: 940px;
		margin: 0 auto;
		padding: 0 5%;
		padding-top: 10%;

		}

		

		</style>
	</head>

		<body>
			<div id='wrapper'>

			<h2 id='h2'>here will be the portfolio</h2>
			<h2><?php 

			$page= $_SERVER['HTTP_HOST'];
			echo $page;

			?></h2>

			</div>
		</body>

		

</html>




