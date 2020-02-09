<?php
$host = "127.0.0.1";
$user = "root";
$password = "root";
$db = "library_system";

$conn = new MySQLi($host, $user, $password, $db);
if ($conn->connect_error) {
  die('Connection Error: '. $conn->connect_error);
}

// echo "Connection Success!";
// $email = "loyd@gmail.com";
// $password = sha1("secret1234");
// $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
// $data = $conn->query($query);
// if ($data->num_rows > 0) {
//   while ($row = $data->fetch_assoc()) {
//     var_dump($row);
//   }
// } else {
//   echo "No record found";
// }