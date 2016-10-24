<?php
	date_default_timezone_set('Europe/Amsterdam');
	include 'dba.inc.php';
	include 'comments.inc.php';
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Comments</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
	echo "<form method='POST' action='".getLogin($con)."'>

	<input type='text' name='uid'>
	<input type='password' name='pwd'>
	<button tpye='submit' name='loginSubmit'>Login</button>

	</form>";

		echo "<form method='POST' action='".userLogout($con)."'>

	<button tpye='submit' name='logoutSubmit'>Logout</button>

	</form>";

?>

<br><br>

<img src="http://ideawebdevelopment.com/wp-content/uploads/2014/12/mysql-php-logos.png">

<?php
	if(isset($_SESSION['id'])) {
		echo "<form method='POST' action='".setComment($con)."'>

		<input type='hidden' name='uid' value='".$_SESSION['id']."'>
		<input type='hidden' name='date' value=".date('Y-m-d H:i:s').">
		<textarea name='message'></textarea><br>
		<button name='commentSubmit' type='Submit'>Comment</button>

		</form>";

	} else {
		echo "<br> <h3>You need to be logged in order to comment!</h3><br>";
	}

getComments($con);

?>

</body>
</html>