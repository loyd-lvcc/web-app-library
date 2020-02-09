<?php
  include_once('connect.php');

  if (isset($_POST['firstname']) && 
      isset($_POST['lastname']) && 
      isset($_POST['email'])) {
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $query = "INSERT INTO users (firstname, lastname, email, password) VALUES ('".$firstname."', '".$lastname."', '".$email."', 'secret123')";

    $conn->query($query);
    header("location: index.php");
  }
?>