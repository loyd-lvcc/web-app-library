<?php 
  include_once('header.php');
  include_once('validate_user.php');
?>
  <div class="books-page">
    <div class="search">
      <input type="text" class="form-control" placeholder="Search Book">
    </div>
    <div>
      
      <?php 
        for ($i=1; $i < 50; $i++) {
          $color = 100 + ($i+20);
      ?>
        <div class="book">
          <div class="cover" style="background: #<?= $color ?>"></div>
          <div class="title">Book Title <?= $i ?></div>
          <div class="add">
            <button class="form-control">Add to Cart</button>
          </div>
        </div>
      <?php
        }
      ?>

    </div>
  </div>
<?php include_once('footer.php');?>