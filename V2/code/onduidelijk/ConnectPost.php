<?php

	/*
		onbekend, nog in te vullen door Lars
	*/

	include 'Connect.php';

	$query = 'INSERT INTO post (titlepost, contentpost)
	VALUES (?, ?)';

	if($statement = $connect->prepare($query)) {

		$statement->bind_param(

			"ss",
			$_POST['titlepost'],
			$_POST['contentpost']

		);

		if($statement->execute()) {

			echo "Succesfully Registered!";
			}

		else {

			echo "Could not register you to the database.";

		}

	}

	else {
		echo('Unable to save.');
	}

	$connect->close();



?>
