<?php

include 'index.php';

$con = mysqli_connect("localhost", "root", "root", "login") or die("Couldn't find the database!");
if (isset($_POST["username"])) {

	$username = mysqli_escape_string($con, $_POST['username']);
	$password = mysqli_escape_string($con, $_POST['password']);
	$select_user = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$run_user = mysqli_query($con, $select_user);
	$check_user = mysqli_num_rows($run_user);
	if ($check_user > 0) {
		header('location:index.php?success');
	} else {
		$message = "Incorrect username or password.";
		echo "<script type='text/javascript'>alert('$message')</script>";
	};

};

?>