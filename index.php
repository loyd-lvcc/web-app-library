<?php 
  include_once('header.php');
  include_once('validate_user.php');
  include_once('connect.php');

  $query = "SELECT * FROM users;";
  $data = $conn->query($query);

?>

<div>
<form action="add-user.php" method="POST">
  <input type="text" name="firstname" placeholder="Firstname">
  <input type="text" name="lastname" placeholder="Lastname">
  <input type="text" name="email" placeholder="Email">
  <input type="submit" value="Add User">
</form>
</div>

<?php 
  if ($data->num_rows <= 0) {
    echo "No record found.";
  } else {
?>
  <table>
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        while ($row = $data->fetch_assoc()) {
      ?>
        <tr>
          <td><?= $row['firstname']; ?></td>
          <td><?= $row['lastname']; ?></td>
          <td><?= $row['email']; ?></td>
          <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
            <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
          </td>
        </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
<?php
  }
?>

<?php include_once('footer.php');?>