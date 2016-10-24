<?php

include 'connect.php';

function getPosts($connect) {
	$sql = "SELECT * FROM post";  
	$result = $connect->query($sql);
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
}
?>