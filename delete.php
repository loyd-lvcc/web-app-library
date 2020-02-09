<?php
include_once('connect.php');
$id = $_GET['id'];

$query = "DELETE FROM users WHERE id = $id";
$conn->query($query);
header("location: index.php");
