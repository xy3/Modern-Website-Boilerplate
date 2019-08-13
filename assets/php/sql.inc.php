<?php 

DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'username here');
DEFINE ('DB_PASS', 'password here');
DEFINE ('DB_NAME', 'database name here');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) OR die('Could not connect to SQL Server '. mysqli_connect_error());

?>