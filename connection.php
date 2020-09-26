<?php
// database connection file
$databaseHost = 'localhost';//or localhost
$databaseName = 'wedrop'; // your db_name
$databaseUsername = 'root'; // root by default for localhost 
$databasePassword = '';  // by defualt empty for localhost

$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>
