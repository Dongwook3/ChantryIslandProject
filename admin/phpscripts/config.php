<?php 
	$config = array(
		"mysql_server" => "localhost",
		"mysql_user" => "root",
		"mysql_password" => "",
		"mysql_db" => "chantry_island"
	);

	$link = mysqli_connect($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if(mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>