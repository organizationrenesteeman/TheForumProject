<html id="wholepage">

	<head>

		<meta name="author" content="RenÃ© Steeman">
		<meta name="description" content="This is a form to share your toughts and problems">
		<meta charset="UTF-8">

		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">
		<link rel="stylesheet" type="text/css" href="code/css.css">
		<link rel="icon" href="images/logo.svg">

		<?php
			include 'postpage.php';
		?>

		<title>
			forum-home
		</title>

	</head>

	<header id="header">

		<h1 id="tabs">
			<span id="home" class="activetab"><a href="index.html"> home </a></span>
			<span id="account"><a href="account.html"> account </a></span>
			<span id="login"> login </span>
		</h1>

		<div id="loginFields">

			<form action='login.php' method='POST'>
				<input id="username" type='text' name='username' placeholder="username"><br>
				<input id="password" type='password' name='password' placeholder="password"><br>
				<input id="submit" type='submit' value='Log in'>

				<p id="CreateAccount">
					<a href="register.php">create</a>
				</p>
				
			</form>

		</div>

		<div id="blank"></div>

	</header>

	<body id="body">

		<div id="postbuttondiv"><p id="postbutton"><a href="post.html">+ Post</a></p></div>

		<div class="post_div"><p><h2 class="post_title">Title</h2><h3 class="post_text">Text Preview</h3></p></div>

		<?php
			getPosts($connectDB2);
		?>

	</body>

	<footer id="footer">

	</footer>

</html>
