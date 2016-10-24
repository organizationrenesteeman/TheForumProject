<?php

	/*
		page to change account settings, like the username, password and e-mail
	*/

	session_start();

	if (!isset($_SESSION['id'])) {
		echo "The page you were looking for does not exist...";
	}

?>

<html>

	<head>

		<title>Account Settings</title>

	</head>

	<body>

		<?php

			if (isset($_SESSION['id'])) {
					echo "";
			}

		?>

		<form method='POST' action'accountsettings.php'>

			<input name='changeUid' type='text'>

				<input name='buttonCUid' type='submit' value='Change Username' id='CB1'><br>

			<input name='changePwd' type='text'>

				<input name='buttonCPwd' type='submit' value='Change Password'><br>

			<input name='changeEmail' type='text'>

				<input name='buttonCEmail' type='submit' value='Change Email Adress'>

		</form>

	</body>

</html>
