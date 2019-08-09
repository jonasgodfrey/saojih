<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'nimetdb';

$conn = mysqli_connect($mysql_host,$mysql_user, $mysql_pass, $mysql_db) or die('Unable to Connect');

?>