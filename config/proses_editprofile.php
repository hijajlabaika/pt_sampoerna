<?php
require_once "koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];


$q = $database_connection->prepare("UPDATE `user` SET `username` = ?, 
`password` = SHA1(?) WHERE `user`.`id` = ?");
$q->execute([$username, $password]);
header("Location: ../menuUtama.php");
