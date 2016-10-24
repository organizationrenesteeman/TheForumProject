<?php

  include 'AccountSettingsPage.php';
  include 'Connect.php';

  function ChangeUsername($con) {
    
   if(isset($_POST['UIDButton'])) {

   	$uidchange = $_POST['changeuid'];
   	$sql = "UPDATE users SET username='".$uidchange."' WHERE id=1";
   	$result = mysqli_query($con, $sql) or die("Couldn't change the username!");

   }
  }

?>
