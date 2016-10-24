<?php

        $captcha;    

        }if(isset($_POST['g-recaptcha-response'])){
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
        }else
        {
		header('Location: index.php');
		mail( 'tech.renesteeman@gmail.com' , 'New form user' , 
		"New form submission: Naam: $naam" );
        }
?>

https://www.youtube.com/watch?v=XjN0j4JQqVI 20:16

<?php

	if(isset($_POST['submitreg'])){ 
	
		$url = ' https://www.google.com/recaptcha/api/siteverify ';
		$privatekey = '6LckngcUAAAAAOBGcZwnbLji8HezqUEdPxHQNKgN';
		
		$respons = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
		
		
	}
		
		
?>