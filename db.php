<?php
	// create cnnection
	$conn = mysqli_connect('localhost','root','','nimetdb');

	// Check Connection
	if(mysqli_connect_errno()){
		// connection failed
		echo 'Failed to connect to MySQL'. mysqli_connect_errno();
	}
