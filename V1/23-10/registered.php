<?php
include 'connect.php';

$query = 'INSERT INTO users (username, password, full_name, email)
VALUES (?, ?, ?, ?)';

        $captcha;    
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please use the reCAPTCHA</h2>';
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LckngcUAAAAAOBGcZwnbLji8HezqUEdPxHQNKgN&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
          echo '<h2>ReCAPTCHA failed</h2>';
        }

	if(isset($_POST['submitreg'])){ 
	
		$url = ' https://www.google.com/recaptcha/api/siteverify ';
		$privatekey = '6LckngcUAAAAAOBGcZwnbLji8HezqUEdPxHQNKgN';
		
		$respons = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
		
		
	}
		
		

if($statement = $connect->prepare($query)) {


if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == true) {

$statement->bind_param(
	"ssss",
	$_POST['username'],
	$_POST['password'],
	$_POST['fullname'],
	$_POST['email']
	);


} else {
	echo "This is not a valid email adress!";
}




if($statement->execute()) {


	echo "Your account has been successfully created!";


} else {

	echo "Could not register you!";

}

}


else {
	echo('Unable to save.');
}

$connect->close();



?>