<!DOCTYPE html>
<?php

if(isset($_POST["submit_logout_button"])) {
  
session_destroy();
session_unset();
header("Location: index.php");
}
if(isset($_SESSION["submit_registration_form"])) {

  
}else{
  
  header("Location: index.php");
  
}

?>
<html lang="en-US">
  <head>
    <title>Social Media Website</title>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body id="body">
    
  </body>
  
</html>

