<!DOCTYPE html>
<html id="wholepage">

<head>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">
<meta name="author" content="RenÃ© Steeman">
<meta name="description" content="This is a form to share your toughts and problems">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<meta name="google-site-verification" content="7pXcb55wUeSJ3fREsHaq4gOpa_Qc8NCw1KXJQ05KTLc" />

<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" type="text/css" href="register.css">
<meta charset="UTF-8">

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

<form action='login.php' method='POST' id="loginFields">
	<input id="username" type='text' name='username' placeholder="username"><br>
	<input id="password" type='password' name='password' placeholder="password"><br>
	<input id="submit" type='submit' value='Log in'>
	<p id="CreateAccount"><a href="register.php">create</a></p>
</form>
	
<div id="blank"></div>

</header>

<body id="body">
<form action="registered.php" method='POST' id="reg">

	Username: <input id="usernamereg" type='text' name='username' placeholder="username" required><br>
	Password: <input id="passwordreg" type='password' name='password' placeholder="password" required><br>
	Full Name: <input id="fullnamereg" type='text' name='fullname' placeholder="full name" required><br>
	Email Adress: <input id="emailreg" type='text' name='email' placeholder="email" required><br>
<div class="g-recaptcha" data-sitekey="6LckngcUAAAAAA7WSeNYGDuOTDEWi2P1_rwinSkn"></div>

	
	</br><input id="submitreg" type='submit' value='Register'>
	
</form>
</body>

<footer id="footer">
</footer>
</html> 


