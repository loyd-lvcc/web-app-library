<?php
session_start();
include_once('connect.php');

if (!isset($_POST) || !isset($_POST['email']) || !isset($_POST['password'])) {
  header("location: login.php?error=true");
  exit();
}

$email = $_POST['email'];
$password = sha1($_POST['password']);
$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$data = $conn->query($query);

if ($data->num_rows <= 0) {
  header("location: login.php?error=true");
  exit();
}

$user = [];
while ($row = $data->fetch_assoc()) {
  $user = $row;
  break;
}

$_SESSION['user'] = $user;
header("location: index.php");