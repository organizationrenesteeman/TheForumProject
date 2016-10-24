<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "root";
	$dbname = "login";

$connectDB2 = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Couldn't find the database!");

function getPosts($connectDB2) {
	$sql = "SELECT * FROM post";  
	$result = $connectDB2->query($sql);
	while ($row = $result->fetch_assoc()) {
		echo "<div class='post_div'>";
		echo "<div class='post_title'>";
		echo '<a href="postview.php?post_id='.$row['post_id'].'">';
		echo $row['post_title'];
		echo "</a>";
		echo "</div>";
		echo "<div class='post_text'>";
		echo $row['post_msg']."<br>";
		echo "</div>";

		echo "</div>";
	}
	//DISPLAY DE DATE + CREATER, NIET DE CONTENT!!!!
	//Maak een werkende page generator die een speciale page maakt zodra de post submit is! [MOET IN ANDERE FILE]!!!
}
?>