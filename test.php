<?php
// var_dump(phpversion());
$pdo = new PDO("mysql:host=localhost;dbname=test", "root", "root");

$stm = $pdo->query("select * from tasks");
$q = $stm->fetch();
var_dump($q);