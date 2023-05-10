<!DOCTYPE html>
<?php


session_start();

//If submit_registration_form is set then perform these actions
if(isset($_POST["submit_registration_form"])) {
//Create connection variable
$connection = mysqli_connect("localhost", "root", "", "websiteusers");

  if(!$connection) {
    //What to do if connection can't be made
    echo "Could not connect to MYSQL database";
    
  }
  //Create Username Variables
  $username = mysqli_real_escape_string($connection, $_POST["user_name"]);
  
  //Create Password Variables
  $password = mysqli_real_escape_string($connection, $_POST["user_pass_word"]);
  
  //Create Hashed Password Variable
  $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
  
  //Create Email Variable
  $email = mysqli_real_escape_string($connection, $_POST["user_email"]);
  
  //Create SQL INSERT INTO variable
  $sql = "INSERT INTO websiteusers (UserName, UserPassWord, UserEmail) VALUES ('$username', '$hashedpassword', '$email')";
  
  //Create New Account
  if(myqsli_query($connection, $sql)) {
    //What to do if new account is made
    echo "Succesfully created new record!";
    
  }else{
    //What to do if new account can't be made
    echo "Could not create new record";
    
  }
    
}else{
  //Where to go if submit_registration_form is not set
  header("Location: index.php");
  
}
?>
<!-- HTML of page -->
<html lang="en-US">
  
  <head>
    
    <title>Social Media Website</title>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <style>
      
    </style>
    <?php
    
    ?>
    
  </head>
  <body id="body">
    
    
    
  </body>
  
  
</html>
