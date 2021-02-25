<?php
DEFINE ('DB_USER', 's3025513');
DEFINE ('DB_PASSWORD', 'awssiash');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 's3025513');
 
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .mysqli_connect_error());
?>
