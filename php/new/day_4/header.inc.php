<html>

<head>

<!-- <link rel='stylesheet' type='text/css' href='normalize.css'> -->
<style type='text/css'>

/**************************
GENERAL
**************************/

body {
  font-family: 'Open Sans', sans-serif;
  /*background-color: #0099FF;*/
  margin:0;
  padding:0;
  background-color: #CCD9FF;


  	}


a{
	text-decoration: none;
}

/********************
HEADING
********************/



header{

	/*background: #434a52;	*/
	background: #434a52;
	float:left;
	margin: 0 0 30px 0;
  	padding: 7px 0 0 0;
	width:100%;
	position: fixed;
	/*z-index:1;
	*/
	border-bottom: 1.5px solid white;
	
}

#logo{

	text-align: center;
	margin:0;
	padding:0;
}

h1{

font-family: 'Slabo';
margin: 15px 0;
font-size:2.25em;
font-weight: bold;
line-height: 1.25em;
color:white;
text-shadow:2px 3px 10px #222;
letter-spacing: .025em;
}

h2{
	font-size: 1.25em;
	/*margin: -5px 0 0;*/
	margin:0;

	font-weight: normal;
	color:white;

}




header :hover h1{
	/*color:#Ete8E8E8;*/
	color:#00CCFF;
	/*text-shadow:2px 3px 10px #222;*/
	text-shadow: 3px 5px 10px #222;

}


/**********************************
NAVIGATION
***********************************/



nav{

	text-decoration: none;
	margin:0;
	padding:0;
	text-align: center;
	background-color: #0099FF;
	
}

nav ul{

	margin:0;
	padding:0;
	/*box-shadow: 10px 0px 100px #888888;*/
	box-shadow: 0 0 5px rgba(81, 203, 238, 1);

}

nav li{

	display: inline-block;
	padding:0.25em;

}


nav a{

	font-weight: 800;
	color:white;
	padding: 0 10px;
	font-size: 1.25em;
	text-shadow:2px 3px 4px #222;
	letter-spacing: .05em;

}



nav a:hover{

	
	color:#00FF00;
}


/*



nav a{

	font-weight: 800;
	color:white;
	padding:0 10px;
	font-size: 1.25em;
	text-shadow:2px 3px 4px #222;
}

nav a:hover{

	
	color:#00FF00;
}
*/
</style>
</head>


	<header>

		<a href='index.php' id='logo'>
		<h1>
		This is the header
		</h1>
		</a>

		<nav>

		<ul>
			<li><a href='index.php'>Portfolio</a></li>
			<li><a href='map.php'>Map</a></li>
			<li><a href='contact.php'>Contact</a></li>
		</ul>
		</nav>

	</header>


	<body>
		

	</body>


</html>





<?php



function cp(){


$current_page = $_SERVER['SCRIPT_NAME'];
echo $current_page;
}


?>