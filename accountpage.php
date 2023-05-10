<!DOCTYPE html>
<?php

session_start();

if(isset($_SESSION["submit_registration_form"])) {
  
}else{
  
  header("Location: index.php");
  
}
?>
<html lang="en-US">

<head>

<title>Social Media Website</title>
<link rel="icon" href="images/icon.png">
<link rel="stylesheet" type="text/css" href="style3.css">
<style>

</style>
<?php


?>

</head>

<body id="body">
  
  <h1>Welcome to Social Media Website <?php $_SESSION["user_name"]; ?></h1>
  
  <br><br><br><br>
  
  <form action="logout.php" method="post">
  <input type="submit" id="submit_logout_button" name="submit_logout_button" value="Logout">
  </form>
  
</body>

</html>
