<?php
require_once "koneksi.php";
$id_user = $_POST["id_user"];
echo $id_user;

$q = $database_connection->prepare("DELETE FROM `user` WHERE `user`.`id` = ?");
$q->execute([$id_user]);
header("Location: ../tampilProfile.php");
