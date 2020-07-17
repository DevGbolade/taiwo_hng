<?php 
require_once("config.php");

if(( isset($_POST['email']) )) {

    $email = $_POST['email_two'];
    //  echo $email;
    
    $sql = "INSERT INTO user_emails (email) VALUES ('$email')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
 }
    

if(( isset($_POST['email_two']) )) {

    $email = $_POST['email_two'];
    //  echo $email;
    
    $sql = "INSERT INTO user_emails (email) VALUES ('$email')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
 }
    



?>