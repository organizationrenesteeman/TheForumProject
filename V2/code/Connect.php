<?php

	/*
		connects to strato server and connects to mysql database
	*/

	$dbhost = "rdbms.strato.de";
	$dbuser = "U2723249";
	$dbpass = "R38lk()pq";
	$dbname = "DB2723249";

	$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Couldn't find/connect (to) the database!");

?>
