<?php

$con = mysqli_connect('localhost', 'root', 'root', 'login');
if (!$con) {
	die("Connection failed:" .mysqli_connect_error());
}

?>