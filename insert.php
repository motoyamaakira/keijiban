<?php

mb_internal_encoding("utf8");

require "DB.php";
$db = new DB();
$pdo = $db->connect();

$stmt = $pdo->prepare($db->insert());

$stmt->bindValue(1,$_POST['handlename']);
$stmt->bindValue(2,$_POST['title']);
$stmt->bindValue(3,$_POST['comments']);

$stmt->execute();
$pdo = NULL;

header("Location:http://localhost/keijiban/index.php");

?>