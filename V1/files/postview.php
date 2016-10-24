<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "root";
	$dbname = "login";

$connectDB3 = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Couldn't find the database!");

$idPost = $_GET['post_id'];
$sqlDisplay = "SELECT * FROM post WHERE post_id='".$idPost."' ";
$result4 = $connectDB3->query($sqlDisplay);
while ($row = $result4->fetch_assoc()) {
	echo $row['post_title'].'<br>';
	echo $row['post_msg'];
}

?>



