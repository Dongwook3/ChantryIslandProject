<?php
	//Set up connection + passing permissions...
	//$user = "dongw612_root";
	//$pass = "root1234"; //My Sever
	$user = "root";
	//$pass = ""; //PC
	$pass = "root"; //MAC
	$url = "localhost";
	$db = "db_chantryisland";
	//$db = "db_createuser";
	//$db = "dongw612_createuser"; //MyServe DB
	
	//$link = mysqli_connect($url, $user, $pass, $db); //PC
	$link = mysqli_connect($url, $user, $pass, $db, "8889"); //MAC
	//Check the connection
	if(mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

?>