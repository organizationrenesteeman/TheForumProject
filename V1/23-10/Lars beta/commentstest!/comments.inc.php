<?php

function setComment($con) {
 if(isset($_POST['commentSubmit'])) {
 	$uid = $_POST['uid'];
 	$date = $_POST['date'];
 	$message = $_POST['message'];

 	$sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
 	$result = mysqli_query($con, $sql);
 }
}

function getComments($con) {
	$sql = "SELECT * FROM comments";
	$result = mysqli_query($con, $sql);
	while ($row = $result->fetch_assoc()) {
		$id = $row['uid'];
		$sql2 = "SELECT * FROM user WHERE id='$id'";
		$result2 = $con->query($sql2);
		if ($row2 = $result2->fetch_assoc()) {
					echo "<div class='comment-box'>";
			echo $row2['uid']."<br>";
			echo $row['date']."<br>";
			echo nl2br($row['message']);
		echo "</p>";

if (isset($_SESSION['id'])) {
	if ($_SESSION['id'] == $row2['id']) {
		echo "<form class='delete-form' method='POST' action='".deleteComment($con)."'>
			<input type='hidden' name='cid' value='".$row['cid']."'>
			<button type='submit' name='commentDelete'>Delete</button>
			</form>



			<form class='edit-form' method='POST' action='editcomment.php'>

			<input type='hidden' name='cid' value='".$row['cid']."'>
			<input type='hidden' name='uid' value='".$row['uid']."'>
			<input type='hidden' name='date' value='".$row['date']."'>
			<input type='hidden' name='message' value='".$row['message']."'>
			<button>Edit</button>

			</form>";
	}
}
		echo "</div>";
		}

	}	
}

function editComment($con) {
 if(isset($_POST['commentSubmit'])) {
 	$cid = $_POST['cid'];
 	$uid = $_POST['uid'];
 	$date = $_POST['date'];
 	$message = $_POST['message'];

 	$sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
 	$result = mysqli_query($con, $sql);
 	header("Location: index.php");
 }
}

function deleteComment($con) {
if(isset($_POST['commentDelete'])) {
 	$cid = $_POST['cid'];

 	$sql = "DELETE FROM comments WHERE cid='$cid'";
 	$result = mysqli_query($con, $sql);
 	header("Location: index.php");
	}
}
//EP 49 MOET IK AAN BEGINNEN


function getLogin($con) {
if(isset($_POST['loginSubmit'])) {
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];

		$sql = "SELECT * FROM user WHERE uid = '$uid' AND pwd = '$pwd'";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
			if ($row = $result->fetch_assoc()) {

				$_SESSION['id'] = $row['id'];
				header("Location: index.php?loginsuccess");
				exit();

			}
		} else {
				header("Location: index.php?loginfailed");
				exit();
		}
}
}

function userLogout($con) {

	if(isset($_POST['logoutSubmit'])) {
	
	session_start();
	session_destroy();
	header("Location: index.php");
	exit();

	}




}