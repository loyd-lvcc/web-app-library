<?php
include_once("connect.php");

$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = $id";
$data = $conn->query($query);
$user = null;
if ($data->num_rows <= 0) {
  header("location: index.php");
} else {
  while ($row = $data->fetch_assoc()) {
    $user = $row;
  }
}
?>

<html>
<body>
  <form action="save-edit.php" method="POST">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <input value="<?= $user['firstname'] ?>" type="text" name="firstname" placeholder="firstname">
    <input value="<?= $user['lastname'] ?>" type="text" name="lastname" placeholder="lastname">
    <input value="<?= $user['email'] ?>" type="text" name="email" placeholder="email">
    <input type="submit" value="Save">
  </form>
</body>
</html>