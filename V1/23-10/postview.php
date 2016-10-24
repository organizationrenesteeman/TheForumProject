<?php

include 'connect.php';

$idPost = $_GET['post_id'];
$sqlDisplay = "SELECT * FROM post WHERE post_id='".$idPost."' ";
$result4 = $connect->query($sqlDisplay);
while ($row = $result4->fetch_assoc()) {
	echo $row['post_title'].'<br>';
	echo $row['post_msg'];
}

?>



