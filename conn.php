<?php

	$dbhost = 'localhost';
	$dbuser = 'clone';
	$dbpass = '123';
	$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Error connecting to mysql server');
	$dbname = 'soa';
	$selectDB = mysql_select_db($dbname) or die('cannot select db');

?>
