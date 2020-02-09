<?php
include_once("connect.php");

// validation here

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$query = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', email = '$email' WHERE id = $id";

$conn->query($query);
header("location: index.php");