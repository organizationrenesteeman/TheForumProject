<?php
session_start();
include 'connect.php';
include 'index.php';

if (isset($_POST['username'])) {

	$username = mysqli_escape_string($con, $_POST['username']);
	$password = mysqli_escape_string($con, $_POST['password']);
	$select_user = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$run_user = mysqli_query($con, $select_user);
	$check_user = mysqli_num_rows($run_user);
	$row5 = $run_user->fetch_assoc();
	if ($check_user > 0) {
		$_SESSION['id'] = $row5['id_user'];	
		echo $_SESSION['id'];
	} else {
		$message = "Incorrect username or password.";
		echo "<script type='text/javascript'>alert('$message')</script>";
	}

}

?>