


<?php



if(isset($_GET["user_name"])&&!empty($_GET["user_name"]))
{

echo $_GET["user_name"];

}

?>

<form action="index.php" method="GET">

<input type="text" name="user_name">
<input type="submit" name="submit" value="submit">

</form>
