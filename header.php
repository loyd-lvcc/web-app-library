<?php session_start(); ?>
<html>
  <head>
    <title>Library System</title>
    <link href="style.css" rel="stylesheet"> 
  </head>
  <body>
    <div class="header">
      <div class="logo">
        <a href="index.php">
          Library System
        </a>
      </div>
      <?php if (isset($_SESSION['user'])) { ?>
        <div class="nav">
          <ul>
            <li>
              <a href="books.php">Books</a>
            </li>
            <li>
              <a href="transactions.php">Transactions</a>
            </li>
            <li>
              <a href="about.php">About</a>
            </li>
            <li>
              <a href="contact.php">Contact</a>
            </li>
            <li>
              <a href="cart.php">Cart</a>
            </li>
          </ul>
        </div>
      <?php } ?>
      <div class="right-nav">
        <div class="nav-login">
          <?php if (isset($_SESSION['user'])) { ?>
            <a href="logout.php">Logout</a>
          <?php } else { ?>
            <a href="login.php">Login</a>
          <?php }?>
        </div>
      </div>
    </div>
    <div class="parent">
      <div class="content">
    