<?php

	/*
		Waarom geen alerts? Waarom DB? De meeste bezoekers zouden niet weten wat dat is.
	*/

include 'connect.php';

$postDB = 'INSERT INTO post (post_title, post_msg)
VALUES (?, ?)';

if($postparam = $connect->prepare($postDB)) {

	$postparam->bind_param(
	"ss",
	$_POST['titlepost'],
	$_POST['contentpost']
	);

	if($postparam->execute()) {

		echo('Your post has been uploaded!');


	} else {

		echo "Your post didn't upload!";

	}

} else {
	echo "<b>Error code #0005</b>; Couldn't upload the post to the DB<br>Contact <a href='mailto: dev.renesteeman@gmail.com'>dev.renesteeman@gmail.com </a> for more information... ";
}

?>
