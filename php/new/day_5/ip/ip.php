<html>


<h1>ip checking</h1>
</html>


<?php



$http_client_ip=$_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for=$_SERVER['HTTP_X_FORWARDED_FOR'];
$ip_address=$_SERVER['REMOTE_ADDR'];

echo $http_client_ip;
echo '<br>';

echo $http_x_forwarded_for;
echo '<br>';
echo $ip_address;


?>