<?php 
  include_once('header.php');
  if (isset($_SESSION['user'])) {
    header("location: index.php");
  }
?>
  <div class="login-page">
    <div>
      <?php if (isset($_GET['error'])) { ?>
        <div class="danger">
          Invalid Credentials!
        </div>
      <?php } ?>
      
      <form method="POST" action="login-post.php">
        <div>
          <input name="email" class="form-control" type="email" placeholder="Email">
        </div>
        <div>
          <input name="password" class="form-control" type="password" placeholder="Password">
        </div>
        <div>
          <button class="form-control">Login</button>
        </div>
      </form>
    </div>
  </div>
<?php include_once('footer.php');?>