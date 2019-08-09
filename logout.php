<?php
require_once 'db.php';
require 'core.php';
session_destroy();
$user_id = $_SESSION['user_id'];

$update_sql = "UPDATE `users` SET `status`=0 WHERE user_id = '$user_id'";
$conn->query($update_sql); 

header('Location:/saojih/');
?>