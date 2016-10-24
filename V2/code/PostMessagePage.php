<!DOCTYPE html>
<html id="wholepage">

	<head>

		<meta name="author" content="RenÃ© Steeman">
		<meta name="description" content="This is a form to share your toughts and problems">
		<meta charset="UTF-8">


		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">
		<link rel="stylesheet" type="text/css" href="css.css">
		<link rel="stylesheet" type="text/css" href="post.css">


		<title>
			forum-home
		</title>

		<link rel="icon" href="logo.svg">

	</head>

	<header id="header">

		<p><div id="contact">for contact message to <div id="mail"><a href="mailto: dev.renesteeman@gmail.com">dev.renesteeman@gmail.com</a></div></div></p>

		<h1 id="tabs">

			<span id="home" class="activetab"><a href="index.php"> home </a></span>
			<span id="account"><a href="account.php"> account </a></span>
			<span id="login"> login </span>

		</h1>

		<div id="loginFields">

		<form action='login.php' method='POST'>

			<input id="username" type='text' name='username' placeholder="username"><br>
			<input id="password" type='password' name='password' placeholder="password"><br>
			<input id="submit" type='submit' value='Log in'>

		</form>
		<p id="CreateAccount"><a href="register.php">create</a></p>
		</div>

		<div id="blank"></div>

	</header>

	<body id="body">

	<form action='postmsg.php' method='POST'>

		<div id="postmessagebuttondiv">
			<input id="postmessage" value='+ Post message' type="submit">
		</div>

		<div id="messageposter">

			<label id="title"> Title: </label>
			<input id="titlemessage" type='text' name='titlepost' placeholder="Max. 25 Chars">

			<p id="message"> Message: </p>
			<textarea id="contentmessage" type='text' name='contentpost' cols="5" rows="10"></textarea>

			<div id="postmessagebuttondiv2">
				<input id="postmessage" value='+ Post message' type="submit"></div>
			</div>

		</form>

	</body>

	<footer id="footer">

	</footer>

</html>
