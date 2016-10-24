<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include 'postpage.php';
include 'connect.php';
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
<?php
if (isset($_SESSION['id'])) {
	echo "<span id='account'><a href='accset.php'> account </a></span>";
} else {
	echo "<img src='bgimg.jpg'>";
}

?>
<span id="login"> login </span>
</h1>

<?php

if (!isset($_SESSION['id'])) {
	echo "<div id='loginFields'>
<form action='login.php' method='POST'>
	<input id='username' type='text' name='username' placeholder='username'><br>
	<input id='password' type='password' name='password' placeholder='password'><br>
	<input id='submit' type='submit' value='Log in'>
</form>
<p id='CreateAccount'><a href='register.php'>create</a></p>
</div>";
} else {
	$sessionUID = $_SESSION['id'];
	$select_user = "SELECT * FROM users WHERE id_user='$sessionUID'";
	$run_user = mysqli_query($connect, $select_user);
	$row5 = $run_user->fetch_assoc();
	echo "<div id='loginFields'>
<form action='logout.php' method='POST'>
	<p>Welcome ".$row5['username'].",</p>
	<button>Logout</button>
</form>
</div>";
}

?>
<div id="blank"></div>

</header>

<body id="body">
<?php

if (isset($_SESSION['id'])) {
	echo "<div id='postbuttondiv'><p id='postbutton'><a href='post.php'>+ Post</a></p></div>";
} else {
	echo "You need to be logged in in order to post.";
}


getPosts($connect);

?>



</body>

<footer id="footer">
</footer>
</html> 

classes: post_div en post_title en post_text