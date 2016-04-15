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

<?php ob_start(); ?>


		<body>

			<div id='wrapper'>

			<h2 id='h2'>This is the map</h2>
			<img src='images/map1.jpg'>
			<img src='images/map2.jpg'>
			<img src='images/map1.jpg'>
			</div>
		</body>


</html>



<?php ob_end_flush(); ?>

