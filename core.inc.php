<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];

if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
	$http_referer = $_SERVER['HTTP_REFERER'];
}

function loggedin(){
	if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
		return true;
	} else{
		return false;
	}
}


function getfield($field){
    require ('config.php');
    $query = "SELECT `$field` FROM `users` WHERE `username` = '".$_SESSION['username']."'";
    if($query_run = mysqli_query($conn, $query)){

            $row = mysqli_fetch_array($query_run);

            $mysql_result = $row[$field];

        //$mysql_result = mysql_result($query_run, 0, $field);
        return $mysql_result;
    }
} 


$admin = "14";


?>