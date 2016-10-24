<?php
include 'postpage.php';

?>

<!DOCTYPE html>
<html id="wholepage">

<head>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">
<meta name="author" content="RenÃ© Steeman">
<meta name="description" content="This is a form to share your toughts and problems">
<link rel="stylesheet" type="text/css" href="css.css">
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
<div id="postbuttondiv"><p id="postbutton"><a href="post.php">+ Post</a></p></div>

<?php
getPosts($connectDB2);

?>



</body>

<footer id="footer">
</footer>
</html> 

classes: post_div en post_title en post_text