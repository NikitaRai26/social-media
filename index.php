<!DOCTYPE html>
<?php
session_start();

?>
<html lang="en-US">

<head>

  <title>Social Media Website</title>
  <link rel="icon" href="images/icon.png">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    
  </style>
  <?php
  
  ?>
  
</head>
<body id="body">

<div id="pageheader">

<h1 id="headertext1">Social Media Website</h1>

</div>
<div id="registration_form_div_1">

<h1 id="formheadertext1">Register Now!</h1>
<form action="verify_registration_form.php" method="post">

<input type="username" id="user_name" name="user_name" placeholder="Username">
<input type="password" id="user_password" name="user_password" placeholder="Password">
<input type="email" id="user_email" name="user_email" placeholder="Email">
<input type="submit" id="submit_registration_form" name="submit_registration_form" value="Sign Up">

</form>


</div>

</body>

</html>