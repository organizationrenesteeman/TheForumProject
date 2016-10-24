<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "root";
	$dbname = "login";

$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Couldn't find the database!");


$query = 'INSERT INTO users (username, password, full_name)
VALUES (?, ?, ?)';

if($statement = $connect->prepare($query)) {

$statement->bind_param(
	"sss",
	$_POST['username'],
	$_POST['password'],
	$_POST['fullname']
	);

if($statement->execute()) {

echo "Succesfully Registered!";
} else {
	echo "Could not register you to the database.";
}

}


else {
	echo('Unable to save.');
}

$connect->close();



?>